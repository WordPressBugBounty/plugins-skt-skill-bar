<?php
/**
* Plugin Name: SKT Skill Bar
* Description: Skill Bar plugin to show skill bar or progress bar or circular bar or vertical bar or half circular bars using fancy animated jquery.
* Plugin URI:  https://www.sktthemes.org
* Author:      SKT Themes
* Author URI:  https://www.sktthemes.org
* Text Domain: skt-skill-bar
* Version:     2.8
* License: 	   GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define('SB_VER','2.8');
add_action('wp_print_scripts', 'sbar_register_scripts');
add_action('wp_print_styles', 'sbar_register_styles');
define( 'SKT_sbar_URI', plugins_url( '', __FILE__ ) );

function sbar_register_scripts() {
	if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		
		wp_register_script('bar_script', plugins_url('skill_bar/bar/jquery.appear.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('bar_script');

		wp_register_script('circle_script', plugins_url('skill_bar/circle/jquery.easy-pie-chart.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('circle_script');

		wp_register_script('circle_custom_script', plugins_url('skill_bar/circle/custom.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('circle_custom_script');
		
		wp_register_script('gage_script', plugins_url('skill_bar/gage/justgage.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('gage_script');

		wp_register_script('gage_raphael_script', plugins_url('skill_bar/gage/raphael-2.1.4.min.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('gage_raphael_script');
		wp_register_script('chart-js-script', plugins_url('skill_bar/js/Chart.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('chart-js-script');
		
		wp_register_script( 'chart.min.js-script', SKT_sbar_URI . '/skill_bar/js/chart.min.js', array( 'jquery' ),SB_VER,false);
		wp_enqueue_script('chart.min.js-script');

		wp_register_script('loader_script', plugins_url('/skill_bar/js/loader.js', __FILE__),'',SB_VER,false);
		wp_enqueue_script('loader_script');
	}
}

function sbar_register_styles() {
	wp_register_style('bar_styles', plugins_url('skill_bar/bar/sbar.css', __FILE__),'',SB_VER,false);	// register
	wp_enqueue_style('bar_styles');	// enqueue

	wp_register_style('circle_styles', plugins_url('skill_bar/circle/jquery.easy-pie-chart.css', __FILE__),'',SB_VER,false);	// register
	wp_enqueue_style('circle_styles');	// enqueue

	wp_register_style('skt_verticleline_css', plugins_url('skill_bar/css/custom.css', __FILE__),'',SB_VER,false);	// register
	wp_enqueue_style('skt_verticleline_css');// enqueue
}

//	[skillwrapper type="circle" track_color="#dddddd" chart_color="#333333" chart_size="150"][/skillwrapper]
function sktskillbar_skillwrapper_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'bar',
		'track_color' => '#dddddd',
		'chart_color' => '#333333',
		'chart_size' => '150',
		'align' => 'center',
		'chart_fontsize' =>'',
		'chart_headingfontsize' =>'',
		'bar_titlefontsize' =>'',
		'bar_titlecolor' =>'',
		'bar_percentfontszie' => '',
		'bar_percentcolor' => '',
		'lineid' => '1',
		'chart_label' => 'Scatter Data',
		'label' => 'Bubble Data',
		'max_radius' => '',
		'x_label'    => '',
		'y_label'    => '',
		'chart_color' => '#ffffff',
		'chart_label' => 'My Dataset',
		'chart_background' => 'rgba(255,99,132,.2)',
		'chart_border' => 'rgb(255,99,132)',
		'heading_one' => 'Dataset',
		'heading_two' => 'Second Dataset',
		'backgroundcolor_one' => '',
		'bordercolor_one' => '',
		'backgroundcolor_one' => '',
		'backgroundcolor_two' =>'',
		'bordercolor_two' => '',
		'point_two_backgroundcolor' => '',
		'backgroundcolor_bar'=> '#FF6384',
		'bordercolor_bar'    => '#FF6384',
		'bordercolor_line'   => '#36A2EB',
		'fallingcolor'    => '#185ec1',
		'risingcolor'   => '#e60e20',
		'chart_title' => '',
		'haxis_title' => '',
		'vaxis_title'  => '',
		'columns' => '',
		'text_color' => '',
		'title_old' => 'Old',
		'title_new' => 'New',
		'title_color' => '',
		'combine_title' => 'Combine',
		'column_color' => '',
		'label_header'        => '',
		'value_label'         => '',
		'before_title'        => '',
		'after_title'         => '',
		'diff_title'          => '',
		'show_bar_diff'       => '',
		'type'                 => '',
	    'stepped_color'  => '',
	    'series_names'         => '',
	    'axis_title'           => '',
	    'treemap_mincolor' => '',
		'treemap_midcolor' => '',
		'treemap_maxcolor' => '',
		'size_label'       => '',
		'color_label'      => '',
		'steppedchart_colors'  => '',
	    'steppedchart_title' => '',
		'series1' => '', 'series2' => '', 'series3' => '', 'series4' => '',
		'series5' => '', 'series6' => '', 'series7' => '', 'series8' => '',
		'lowcolor'     => '#FBBC05',
		'opencolor'    => '#4285F4',
		'closecolor'   => '#FF6D01',
		'highcolor'    => '#46BDC6',
		'start_range_color'  => '#d6e9ff',
		'end_range_color'    => '#4285F4',
		'show_row_number'    => '',
		'track_height' => '',
		'gantt_height' => '',
		'arrow_color' => '',
		'arrow_width' => '',
		'min'           => '',
		'max'           => '',
		'minor_ticks'   => '',
		'green_from'    => '',
		'green_to'      => '',
		'yellow_from'   => '',
		'yellow_to'     => '',
		'red_from'      => '',
		'red_to'        => '',
		'gauge_width'   => '',
		'gauge_height'  => '',
		'live'          => '',
		'live_interval' => '',
		'point_color'  => '',
		'trend_type'   => 'exponential',
		'trend_degree' => '3',
		'trend_color'  => '',
		'trend_legend' => 'yes',
		'chart_title_color' => '#333333',
		'bar_title' => '',
		'series' => ''


	), $atts ) );

	switch ( $type ){

		case 'bar':
			$wrapCode = '<div id="skillbar_straight" style="padding:10px 0;">'.str_replace('<br />', "\n", do_shortcode($content))."\n".'<div style="clear:both;"></div>'."\n".'</div>'."\n".'<div style="clear:both; height:10px; overflow:hidden;"></div>'."\n";
			$wrapCode .= '<style type="text/css">.skillbar-title{font-size:'.esc_attr($bar_titlefontsize).'px;color:'.esc_attr($bar_titlecolor).';}.skill-bar-percent{font-size:'.esc_attr($bar_percentfontszie).'px;color:'.esc_attr($bar_percentcolor).';}</style>';
			$wrapCode .= '<script>
				function sbar(){
					jQuery(".skillbar").each(function(){
						jQuery(this).find(".skillbar-bar").animate({
							width:jQuery(this).attr("data-percent")
						},3000);
					});	
				}
				if ( jQuery("#skillbar_straight").next().is(":appeared") ){
					sbar();
				} else {
					jQuery( window ).scroll(function() {
						if ( jQuery("#skillbar_straight").next().is(":appeared") ){
							sbar();
						}
					});
				}
				</script>';
		break;

		case 'gage':
			static $gage_counter = 0;
			$gage_counter++;

			$wrapCode = '';
			$content  = wp_strip_all_tags($content);
			$start    = strpos($content, '[');
			$end      = strrpos($content, '"]');
			$len      = strlen($content);
			$diff     = $end - $len;
			$content  = substr($content, $start, $diff);
			$content  = str_replace(
				array('[skill ', '"]', '" ]', '" ', '="'),
				array('', '', '', ':', '='),
				$content
			);

			$cntStrAr = explode("\n", $content);
			$numAr    = array();
			foreach ($cntStrAr as $cntk => $cntv) {
				if (trim($cntv) != '') {
					$cnStr = str_replace(
						array('bar_foreground=', 'bar_background=', 'percent=', 'title='),
						array('', '', '', ''),
						trim($cntv)
					);
					$numAr[] = explode(':', $cnStr);
				}
			}

			// unique wrapper id
			$gage_wrapper_id = 'gage_chart_' . $gage_counter;

			$wrapCode .= '<style type="text/css">';
			$cssVar = '';
			foreach ($numAr as $n => $b) {
				$n++;
				$cssVar .= (count($numAr) == $n)
					? '#' . $gage_wrapper_id . ' #g' . $n . '_' . $gage_counter
					: '#' . $gage_wrapper_id . ' #g' . $n . '_' . $gage_counter . ', ';
			}
			$wrapCode .= $cssVar . '{ width:200px; height:160px; display:inline-block; margin:0.5em; }
				#' . $gage_wrapper_id . '{ text-align:' . esc_attr($align) . '; }';
			$wrapCode .= '</style>';

			$wrapCode .= '<script>';
			$sbIds = '';
			foreach ($numAr as $n => $b) {
				$n++;
				$sbIds .= (count($numAr) == $n)
					? 'g' . $n . '_' . $gage_counter
					: 'g' . $n . '_' . $gage_counter . ', ';
			}
			$wrapCode .= 'var ' . $sbIds . ';' . "\n";

			$wrapCode .= 'function gager_' . $gage_counter . '(){';
			foreach ($numAr as $n => $v) {
				$n++;
				$value      = isset($v[0]) ? floatval($v[0]) : 0;
				$title      = isset($v[1]) ? sanitize_text_field($v[1]) : '';
				$color      = isset($v[2]) ? sanitize_text_field($v[2]) : '#000';
				$gaugeColor = isset($v[3]) ? sanitize_text_field($v[3]) : '#eee';

				$wrapCode .= 'var g' . esc_attr($n) . '_' . esc_attr($gage_counter) . ' = new JustGage({
					id: "g' . esc_attr($n) . '_' . esc_attr($gage_counter) . '",
					value: ' . esc_attr($value) . ',
					title: "' . esc_attr($title) . '",
					valueFontColor: "' . esc_attr($color) . '",
					levelColors: ["' . esc_attr($color) . '"],
					titleFontColor: "' . esc_attr($color) . '",
					labelFontColor: "' . esc_attr($color) . '",
					gaugeColor: "' . esc_attr($gaugeColor) . '",
					min: 0,
					max: 100,
					label: "%",
					levelColorsGradient: false,
					showMinMax: "hide",
					shadowOpacity: "0.2",
					shadowSize: "5",
					startAnimationType: "easein"
				});' . "\n";
			}
			$wrapCode .= '};' . "\n";

			$wrapCode .= 'jQuery(document).ready(function(){
				if ( jQuery("#' . $gage_wrapper_id . '").next().is(":appeared") ){
					if ( ! jQuery("#' . $gage_wrapper_id . '").hasClass("gc_active") ) {
						gager_' . $gage_counter . '();
						jQuery("#' . $gage_wrapper_id . '").addClass("gc_active");
					}
				} else {
					jQuery(window).scroll(function(){
						if ( jQuery("#' . $gage_wrapper_id . '").next().is(":appeared") ){
							if ( ! jQuery("#' . $gage_wrapper_id . '").hasClass("gc_active") ) {
								gager_' . $gage_counter . '();
								jQuery("#' . $gage_wrapper_id . '").addClass("gc_active");
							}
						}
					});
				}
			});';
			$wrapCode .= '</script>';

			$wrapCode .= '<div id="' . $gage_wrapper_id . '">';
			foreach ($numAr as $n => $b) {
				$n++;
				$wrapCode .= '<div id="g' . esc_attr($n) . '_' . esc_attr($gage_counter) . '"></div>';
			}
			$wrapCode .= '</div>';
			$wrapCode .= '<div style="clear:both; height:10px; overflow:hidden;"></div>';
		break;

		case 'circle':
			$wrapCode = '';
			$content = wp_strip_all_tags($content);
			$start = strpos($content, '[');
			$end = strrpos($content, '"]');
			$len =  strlen($content);
			$diff = $end - $len;
			$content = substr( $content, $start, $diff);
			$content = str_replace(array('[skill ', '"]', '" ]', '" ', '="' ), array('', '', '', ':', '='), $content);
			$cntStrAr = explode( "\n", $content );
		
			$numAr = array();
			foreach($cntStrAr as $cntk => $cntv){
				if($cntv != ''){
					$cnStr = str_replace( array( 'percent=', 'title='), array('',''), trim($cntv) );
					$numAr[] = explode(':', $cnStr);
				}
			}
			$cssVar = '';
			foreach($numAr as $n => $b){
				$n++; 
				$cssVar .= (count($numAr) == $n) ? '#g'.$n : '#g'.$n.', ';  
			}
			$sbIds = '';
			foreach($numAr as $n => $b){
				$n++;
				$sbIds .= (count($numAr) == $n) ? 'g'.$n : 'g'.$n.', ';  
			}

			$rgb_track_color = sbar_hex2rgb ( $track_color );
		
			$wrapCode .= '<style>.sktb_pie_graph {
			  --w:200px;
			  width:'. absint ( $chart_size ) .'px;
			  aspect-ratio: 1;
			  position: relative;
			  display: inline-grid;
			  place-content: center;
			  margin: 5px 1em;
			  
			  font-weight: bold;
			  font-family: sans-serif;
			  border-radius: 50%;
		   }
		   .sktb_pie_graph:before {
			  content: "";
			  position: absolute;
			  border-radius: 50%;
			  inset: 0;
			  background: conic-gradient(var(--c) calc(var(--p)*1%),'.esc_attr($chart_color).' 0);
			  -webkit-mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
					 mask:radial-gradient(farthest-side,#0000 calc(99% - var(--b)),#000 calc(100% - var(--b)));
		   }</style>';

				$wrapCode .= '<div class="skt_skill_flex-wrapper" style="font-size:12px;text-align:'.esc_attr($align).'">';
		        foreach($numAr as $n => $v){
		         	$wrapCode .= '<div class="sktb_pie_graph">
                         <div class="sktb_pie_graph" style="--p:'.esc_attr($v[0]).';--b:30px;--c:'.esc_attr($track_color).';font-size: '.esc_attr($chart_fontsize).'px;color:'.esc_attr($chart_color).'""><span style="color:'.esc_attr($track_color).'">'.esc_attr($v[0]).'%</span></div>
                         <span style="font-size: '.esc_attr($chart_headingfontsize).'px;text-align:center;color:'.esc_attr($track_color).'">'.esc_attr($v[1]).'</span>
                    </div>';
		        }
				$wrapCode .= '</div>';
		break;

		case 'skt_verticalgraph':
			$wrapCode = '';
			$content = wp_strip_all_tags($content);
			$start = strpos($content, '[');
			$end = strrpos($content, '"]');
			$len =  strlen($content);
			$diff = $end - $len;
			$content = substr( $content, $start, $diff);

			$content = str_replace(array('[skill ', '"]', '" ]', '" ', '="' ), array('', '', '', ':', '='), $content);
			$cntStrAr = explode( "\n", $content );

			$numAr = array();
			foreach($cntStrAr as $cntk => $cntv){
				if($cntv != ''){
					$cnStr = str_replace( array( 'percent=', 'title=', 'verticalgraph_background=', 'verticalgraph_titlecolor='), array('','','',''), trim($cntv) );
					$numAr[] = explode(':', $cnStr);
				}
			}

			$cssVar = '';
			foreach($numAr as $n => $b){ 
				$n++; 
				$cssVar .= (count($numAr) == $n) ? '#g'.$n : '#g'.$n.', ';  
			}
			$sbIds = '';
			foreach($numAr as $n => $b){ 
				$n++; 
				$sbIds .= (count($numAr) == $n) ? 'g'.$n : 'g'.$n.', ';  
			}

			$wrapCode .= '<div id="skillbarstraight">';
			$wrapCode .= '<ul class="chart_line skt_skill_bar-graph">';
	        foreach($numAr as $n => $v){
	         	$wrapCode .= '<li class="skt_skill_bar" style="height:'.$v[0].'%;background:'.$v[2].';" title="'.$v[1].'">
					<div class="percent" style="color:'.$v[3].';">'.$v[0].'%</div>
					<div class="description" style="color:'.$v[3].';">'.$v[1].'</div></li>';
	        }
			$wrapCode .= '</ul></div>';
		break;

		case 'skt_piegraph':

		    $wrapCode = '';
		    $content = wp_strip_all_tags($content);
		    $start = strpos($content, '[');
		    $end = strrpos($content, '"]');
		    if ($start === false || $end === false || $end <= $start) break;

		    $len  = strlen($content);
		    $diff = $end - $len;
		    $content = substr($content, $start, $diff);

		    $content = str_replace(
		        array('[skill ', '"]', '" ]', '" ', '="'),
		        array('', '', '', ':', '='),
		        $content
		    );

		    $cntStrAr = explode("\n", $content);

		    $numAr = array();
		    foreach ($cntStrAr as $cntv) {
		        if (trim($cntv) != '') {
		            $cnStr = str_replace(
		                array('percent=', 'title=', 'piegraph_background=', 'piegraph_titlecolor='),
		                array('', '', '', ''),
		                trim($cntv)
		            );
		            $numAr[] = explode(':', $cnStr);
		        }
		    }

		    $title = array();
		    $percentage = array();
		    $piegraph_background = array();

		    foreach ($numAr as $v) {
		        $percentage[] = floatval($v[0]);
		        $title[] = sanitize_text_field($v[1]);
		        $piegraph_background[] = sanitize_hex_color($v[2]) ?: '#cccccc';
		    }

		    static $chart_count = 0;
		    $chart_count++;
		    $chart_id = 'skt_skills_myChart_' . $chart_count;

		    $wrapCode .= '<canvas id="' . esc_attr($chart_id) . '" style="width:100%;max-width:350px;height:350px; margin: 0 auto;"></canvas>';

		    $percentage_json = wp_json_encode($percentage);
		    $title_json = wp_json_encode($title);
		    $background_json = wp_json_encode($piegraph_background);

		    $wrapCode .= '<script>
		        (function(){
		            const ctx = document.getElementById("' . esc_js($chart_id) . '");
		            if(!ctx) return;
		            new Chart(ctx, {
		                type: "pie",
		                data: {
		                    labels: ' . $title_json . ',
		                    datasets: [{
		                        backgroundColor: ' . $background_json . ',
		                        data: ' . $percentage_json . '
		                    }]
		                },
		                options: {
		                    title: { display: false }
		                }
		            });
		        })();
		    </script>';
		break;

		case 'skt_polygraph':
		    static $poly_counter = 0;
		    $poly_counter++;
		    $wrapCode = '';

		    $canvas_id = 'skt_skills_polychart_' . $poly_counter;

		    // wrapper-level label/title color
		    $title_color = ! empty( $polygraph_titlecolor ) ? sanitize_text_field( $polygraph_titlecolor ) : '#333333';

		    // ---- generic + sanitized parse (order matter nahi karta) ----
		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );

		    $titles      = array();
		    $percentages = array();
		    $backgrounds = array();

		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );

		        $pairs = array();
		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }

		        $titles[]      = isset( $pairs['title'] )                ? sanitize_text_field( $pairs['title'] )                : '';
		        $percentages[] = isset( $pairs['percent'] )              ? (float) $pairs['percent']                             : 0;
		        $backgrounds[] = isset( $pairs['polygraph_background'] ) ? sanitize_text_field( $pairs['polygraph_background'] ) : '#000000';
		    }

		    if ( empty( $titles ) ) {
		        return '';
		    }

		    $titles_json  = wp_json_encode( $titles );
		    $percent_json = wp_json_encode( $percentages );
		    $bg_json      = wp_json_encode( $backgrounds );

		    $wrapCode .= '
		    <div class="skt-poly-wrap" style="position:relative;width:100%;max-width:580px;margin:0 auto;">
		        <canvas id="' . esc_attr( $canvas_id ) . '" role="img" aria-label="polar area chart"></canvas>
		    </div>
		    <script>
		    (function(){
		        document.addEventListener("DOMContentLoaded", function(){
		            var el = document.getElementById("' . esc_js( $canvas_id ) . '");
		            if(!el){ return; }

		            new Chart(el.getContext("2d"), {
		                type: "polarArea",
		                data: {
		                    labels: ' . $titles_json . ',
		                    datasets: [{
		                        label: "",
		                        data: ' . $percent_json . ',
		                        backgroundColor: ' . $bg_json . '
		                    }]
		                },
		                options: {
		                    responsive: true,
		                    maintainAspectRatio: true,
		                    plugins: {
		                        legend: { labels: { color: ' . wp_json_encode( $title_color ) . ' } }
		                    }
		                }
		            });
		        });
		    })();
		    </script>';
		break;

		case 'skt_linegraph':
				static $line_counter = 0;
				$line_counter++;

				$wrapCode = '';
				$content = wp_strip_all_tags($content);
				$start = strpos($content, '[');
				$end = strrpos($content, '"]');
				$len = strlen($content);
				$diff = $end - $len;
				$content = substr($content, $start, $diff);

				$content = str_replace(array('[skill ', '"]', '" ]', '" ', '="'), array('', '', '', ':', '='), $content);
				$cntStrAr = explode("\n", $content);

				$numAr = array();
				foreach ($cntStrAr as $cntk => $cntv) {
					if (trim($cntv) != '') {
						$cnStr = str_replace(
							array('percent=', 'title=', 'linegraph_background=', 'linegraph_titlecolor='),
							array('', '', '', ''),
							trim($cntv)
						);
						$numAr[] = explode(':', $cnStr);
					}
				}

				$title = array();
				$percentage = array();
				$linegraph_background = array();

				foreach ($numAr as $n => $v) {
					$percentage[] = isset($v[0]) ? ltrim(ltrim($v[0], '&nbsp;'), ' ') : 0;
					$title[] = isset($v[1]) ? ltrim(ltrim($v[1], '&nbsp;'), ' ') : '';
					$linegraph_background[] = isset($v[2]) ? ltrim(ltrim($v[2], '&nbsp;'), ' ') : '#000';
				}

				$percentage_json = wp_json_encode($percentage);
				$title_json = wp_json_encode($title);
				$linegraph_background_json = wp_json_encode($linegraph_background);

				// Unique canvas ID for each instance
				$canvas_id = 'toolTip' . esc_attr($line_counter);

				$wrapCode .= '<canvas class="linegraphskill" id="' . $canvas_id . '" aria-label="chart" height="350" width="580" style="margin:0 auto;"></canvas>';
				$wrapCode .= '<script>
					document.addEventListener("DOMContentLoaded", function() {
						var xValues_' . $line_counter . ' = ' . $title_json . ';
						var yValues_' . $line_counter . ' = ' . $percentage_json . ';
						var barColors_' . $line_counter . ' = ' . $linegraph_background_json . ';
						var chartTooltip_' . $line_counter . ' = document.getElementById("' . $canvas_id . '").getContext("2d");
						new Chart(chartTooltip_' . $line_counter . ', {
							type: "line",
							data: {
								labels: xValues_' . $line_counter . ',
								datasets: [{
									label: "",
									data: yValues_' . $line_counter . ',
									backgroundColor: barColors_' . $line_counter . ',
									borderColor: ["black"],
									borderWidth: 1,
									pointRadius: 5,
								}],
							},
							options: {
								responsive: false,
								plugins: {
									legend: {
										display: false,
										position: "bottom",
										align: "center",
										labels: {
											color: "darkred",
											font: { weight: "bold" }
										}
									}
								}
							}
						});
					});
				</script>';
		break;

		case 'skt_scattergraph':
			static $scatter_counter = 0;
			$scatter_counter++;

			$wrapCode = '';
			$content = wp_strip_all_tags($content);
			$start = strpos($content, '[');
			$end   = strrpos($content, '"]');

			if ( $start === false || $end === false ) {
				break;
			}

			$len = strlen($content);
			$content = substr($content, $start, $end - $len);
			$content = str_replace(
				array('[skill ', '"]', '" ]', '" ', '="'),
				array('', '', '', ':', '='),
				$content
			);
			$rows = explode("\n", $content);
			$data = array();
			foreach ($rows as $row) {
				if (trim($row) === '') {
					continue;
				}

				$row = str_replace(
					array(
						'x=',
						'y='
					),
					array(
						'',
						''
					),
					trim($row)
				);
				$point = explode(':', $row);
				if (count($point) >= 2) {
					$data[] = array(
						'x' => floatval($point[0]),
						'y' => floatval($point[1]),
					);

				}
			}

			$chart_id = 'scatter_chart_' . $scatter_counter;
			$wrapCode .= '<canvas id="' . esc_attr($chart_id) . '" height="350"></canvas>';
			$wrapCode .= '<script>
			document.addEventListener("DOMContentLoaded",function(){
				var ctx=document.getElementById("' . esc_js($chart_id) . '");
				new Chart(ctx,{
					type:"scatter",
					data:{
						datasets:[{
							label:"' . esc_js( $chart_label ) . '",
							data:' . wp_json_encode($data) . ',
							backgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $chart_color ) ) . '",

						}]
					},
					options:{
						responsive:true,

						scales:{
							x:{
								type:"linear",
								position:"bottom"
							}
						}
					}

				});

			});
			</script>';
		break;

		case 'skt_bubblegraph':
		    static $bubble_counter   = 0;
		    static $bubble_style_done = false;
		    $bubble_counter++;
		    $wrapCode = '';

		    preg_match_all(
		        '/\[skill\s+x="([^"]+)"\s+y="([^"]+)"\s+r="([^"]+)"\]/',
		        $content,
		        $matches,
		        PREG_SET_ORDER
		    );

		    if ( empty( $matches ) ) {
		        return '';
		    }

		    $max_r = 0;
		    foreach ( $matches as $row ) {
		        $max_r = max( $max_r, (float) $row[3] );
		    }

		    $max_radius = ! empty( $max_radius ) ? (float) $max_radius : 45;
		    $min_px     = 4;
		    $scale      = ( $max_r > $max_radius && $max_r > 0 ) ? ( $max_radius / $max_r ) : 1;

		    $data = array();
		    foreach ( $matches as $row ) {
		        $orig = (float) $row[3];
		        $data[] = array(
		            'x'      => (float) $row[1],
		            'y'      => (float) $row[2],
		            'r'      => max( $min_px, round( $orig * $scale, 2 ) ),
		            '_origR' => $orig,
		        );
		    }

		    $pad = (int) ceil( $max_r * $scale ) + 12;

		    $x_label = ! empty( $x_label ) ? sanitize_text_field( $x_label ) : 'X';
		    $y_label = ! empty( $y_label ) ? sanitize_text_field( $y_label ) : 'Y';

		    $hex = ltrim( trim( $chart_color ), '#' );
		    if ( strlen( $hex ) === 3 ) {
		        $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
		    }
		    if ( ! preg_match( '/^[0-9a-fA-F]{6}$/', $hex ) ) {
		        $hex = '4285F4';
		    }
		    $rr = hexdec( substr( $hex, 0, 2 ) );
		    $gg = hexdec( substr( $hex, 2, 2 ) );
		    $bb = hexdec( substr( $hex, 4, 2 ) );
		    $fill   = 'rgba(' . $rr . ',' . $gg . ',' . $bb . ',0.55)';
		    $border = 'rgba(' . $rr . ',' . $gg . ',' . $bb . ',1)';

		    $chart_id = 'bubble_chart_' . $bubble_counter;

		    if ( ! $bubble_style_done ) {
		        $bubble_style_done = true;
		        $wrapCode .= '
		        <style>
		            .skt-bubble-wrap{position:relative;width:100%;height:clamp(300px,60vw,480px);}
		            @keyframes sktBubbleAurora{ to{ transform:rotate(360deg); } }
		            @media (max-width:600px){ .skt-bubble-bg{padding:10px;border-radius:12px;} .skt-bubble-card{padding:6px;} }
		            @media (prefers-reduced-motion:reduce){ .skt-bubble-bg::before{animation:none;} }
		        </style>';
		    }

		    $wrapCode .= '
		    <div class="skt-bubble-bg">
		        <div class="skt-bubble-card">
		            <div class="skt-bubble-wrap">
		                <canvas id="' . esc_attr( $chart_id ) . '"></canvas>
		            </div>
		        </div>
		    </div>

		    <script>
		    document.addEventListener("DOMContentLoaded", function(){
		        var ctx = document.getElementById("' . esc_js( $chart_id ) . '");
		        if(!ctx){ return; }

		        new Chart(ctx, {
		            type:"bubble",
		            data:{
		                datasets:[{
		                    label:"' . esc_js( $label ) . '",
		                    data:' . wp_json_encode( $data ) . ',
		                    backgroundColor:"' . esc_js( $fill ) . '",
		                    borderColor:"' . esc_js( $border ) . '",
		                    borderWidth:1.5
		                }]
		            },
		            options:{
		                responsive:true,
		                maintainAspectRatio:false,
		                layout:{ padding: ' . (int) $pad . ' },
		                plugins:{
		                    legend:{ labels:{ color:"'. $border .'" } },
		                    tooltip:{ callbacks:{ label:function(c){
		                        return "(" + c.raw.x + ", " + c.raw.y + ")  r:" + c.raw._origR;
		                    } } }
		                },
		                scales:{
		                    x:{ grid:{ color:"rgba(0,0,0,.08)" }, ticks:{ color:"#475569" }, title:{ display:true, text:"' . esc_js( $x_label ) . '", color:"'. $border .'" } },
		                    y:{ grid:{ color:"rgba(0,0,0,.08)" }, ticks:{ color:"#475569" }, title:{ display:true, text:"' . esc_js( $y_label ) . '", color:"'. $border .'" } }
		                },
		                animation:{ duration:100, easing:"easeOutQuart" }
		            }
		        });
		    });
		    </script>';
		break;

		case 'skt_radargraph':

			static $radar_counter = 0;
			$radar_counter++;

			$wrapCode = '';

			$labels = array();
			$dataset1 = array();
			$dataset2 = array();

			preg_match_all(
				'/title="([^"]+)".*?value1="([^"]+)".*?value2="([^"]+)"/',
				$content,
				$matches,
				PREG_SET_ORDER
			);

			foreach ( $matches as $row ) {

				$labels[] = sanitize_text_field( $row[1] );

				$dataset1[] = floatval( $row[2] );

				$dataset2[] = floatval( $row[3] );

			}

			$chart_id = 'radar_' . $radar_counter;
			$wrapCode .= '<div style="position:relative;width:100%;height:500px;">';
			$wrapCode .= '<canvas id="' . esc_attr( $chart_id ) . '"></canvas>';
			$wrapCode .= '</div>';
			$wrapCode .= '

			<script>

			document.addEventListener(
			"DOMContentLoaded",

			function(){

			new Chart(

			document.getElementById("' . esc_js($chart_id) . '"),

			{

			type:"radar",

			data:{

			labels: '.wp_json_encode($labels).',
			datasets:[
			{

			label:"'. esc_js( $heading_one ). '",
			data: '.wp_json_encode($dataset1).',
			fill:true,
			backgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb_opacity( $backgroundcolor_one ) ) . '",
			borderColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $bordercolor_one ) ) . '",
			pointBackgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $backgroundcolor_one ) ) . '"
			},

			{

			label:"'. esc_js( $heading_two ). '",
			data: '.wp_json_encode($dataset2).',
			fill:true,
			backgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb_opacity( $backgroundcolor_two ) ) . '",
			borderColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $bordercolor_two ) ) . '",
			pointBackgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $point_two_backgroundcolor ) ) . '"
			}
			]

			},

			options:{
				responsive: true,
    			maintainAspectRatio: false
			}

			}

			);

			}

			);

			</script>';
		break;

		case 'skt_mixchart':

		    static $mix_counter = 0;
		    $mix_counter++;

		    $wrapCode = '';

		    $labels   = array();
		    $dataset1 = array();
		    $dataset2 = array();

		    preg_match_all(
		        '/title="([^"]+)".*?value1="([^"]+)".*?value2="([^"]+)"/',
		        $content,
		        $matches,
		        PREG_SET_ORDER
		    );

		    foreach ( $matches as $row ) {

		        $labels[]   = sanitize_text_field( $row[1] );
		        $dataset1[] = floatval( $row[2] );
		        $dataset2[] = floatval( $row[3] );

		    }

		    $chart_id = 'mixchart_' . $mix_counter;
		    $wrapCode .= '<div style="position:relative;width:100%;height:500px;">';
		    $wrapCode .= '<canvas id="' . esc_attr( $chart_id ) . '"></canvas>';
		    $wrapCode .= '</div>'; 

		    $wrapCode .= '
		    <script>

		    document.addEventListener("DOMContentLoaded", function(){

		        new Chart(
		            document.getElementById("' . esc_js( $chart_id ) . '"),
		            {
		                data: {

		                    labels: ' . wp_json_encode( $labels ) . ',

		                    datasets: [

		                        {
		                            type: "bar",
		                            label: "' . esc_js( $heading_one ) . '",
		                            data: ' . wp_json_encode( $dataset1 ) . ',
		                            borderColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $bordercolor_bar ) ) . '",
		                            backgroundColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb_opacity( $backgroundcolor_bar ) ) . '",
		                            borderWidth: 1
		                        },

		                        {
		                            type: "line",
		                            label: "' . esc_js( $heading_two ) . '",
		                            data: ' . wp_json_encode( $dataset2 ) . ',
		                            fill: false,
		                            borderColor: "' . esc_attr( sktskillbar_hex_to_rgb_to_rgb( $bordercolor_line ) ) . '",
		                            tension: 0.3
		                        }

		                    ]

		                },

		                options: {
		                    responsive: true,
    						maintainAspectRatio: false
		                }
		            }
		        );

		    });

		    </script>';
		break;

		case 'skt_waterfallchart':
		    static $wf_counter    = 0;
		    static $wf_style_done = false;
		    $wf_counter++;
		    $wrapCode = '';
		    $chart_id = 'waterfallchart_' . $wf_counter;

		    // ---- colors ----
		    $fallingcolor = ! empty( $fallingcolor ) ? sanitize_text_field( $fallingcolor ) : '#EA4335';
		    $risingcolor  = ! empty( $risingcolor )  ? sanitize_text_field( $risingcolor )  : '#34A853';
		    $lowcolor     = ! empty( $lowcolor )     ? sanitize_text_field( $lowcolor )     : '#FBBC05';
		    $opencolor    = ! empty( $opencolor )    ? sanitize_text_field( $opencolor )    : '#4285F4';
		    $closecolor   = ! empty( $closecolor )   ? sanitize_text_field( $closecolor )   : '#FF6D01';
		    $highcolor    = ! empty( $highcolor )    ? sanitize_text_field( $highcolor )    : '#46BDC6';
		    $text_color   = ! empty( $text_color )   ? sanitize_text_field( $text_color )   : '#444444';

		    $data_rows = array();
		    $tips      = array();
		    preg_match_all(
		        '/title="([^"]+)".*?low="([^"]+)".*?open="([^"]+)".*?close="([^"]+)".*?high="([^"]+)"/',
		        $content, $matches, PREG_SET_ORDER
		    );
		    foreach ( $matches as $row ) {
		        $title   = sanitize_text_field( $row[1] );
		        $low_s   = sanitize_text_field( $row[2] );
		        $open_s  = sanitize_text_field( $row[3] );
		        $close_s = sanitize_text_field( $row[4] );
		        $high_s  = sanitize_text_field( $row[5] );

		        $tips[] = '<div style="font-weight:bold;color:#222;margin-bottom:2px;">' . esc_html( $title ) . '</div>'
		            . '<div style="color:' . esc_attr( $lowcolor )   . ';">' . esc_html( $low_s )   . '</div>'
		            . '<div style="color:' . esc_attr( $opencolor )  . ';">' . esc_html( $open_s )  . '</div>'
		            . '<div style="color:' . esc_attr( $closecolor ) . ';">' . esc_html( $close_s ) . '</div>'
		            . '<div style="color:' . esc_attr( $highcolor )  . ';">' . esc_html( $high_s )  . '</div>';

		        $data_rows[] = array( $title, (float) $row[2], (float) $row[3], (float) $row[4], (float) $row[5] );
		    }

		    $legend_items = array(
		        array( 'Rising (close > open)',  $risingcolor ),
		        array( 'Falling (close < open)', $fallingcolor ),
		        array( 'Low',   $lowcolor ),
		        array( 'Open',  $opencolor ),
		        array( 'Close', $closecolor ),
		        array( 'High',  $highcolor ),
		    );
		    $legend_html = '<div class="skt-wf-legend" style="color:' . esc_attr( $text_color ) . ';">';
		    foreach ( $legend_items as $li ) {
		        $legend_html .= '<span class="skt-wf-item"><span class="skt-wf-box" style="background:' . esc_attr( $li[1] ) . ';"></span>' . esc_html( $li[0] ) . '</span>';
		    }
		    $legend_html .= '</div>';

		    if ( ! $wf_style_done ) {
		        $wf_style_done = true;
		        $wrapCode .= '
		        <style>
		            .skt-wf-bg{position:relative;}
		            .skt-wf-card{position:relative;}
		            .skt-wf-chart{width:100%;}
		            .skt-wf-legend{position:relative;z-index:1;display:flex;flex-wrap:wrap;gap:14px;margin-top:14px;font-size:13px;}
		            .skt-wf-item{display:inline-flex;align-items:center;gap:7px;}
		            .skt-wf-box{width:16px;height:16px;border-radius:4px;display:inline-block;border:1px solid rgba(0,0,0,.15);}
		            .skt-wf-tip{position:absolute;display:none;pointer-events:none;z-index:9999;background:#fff;border:1px solid #ccc;border-radius:4px;box-shadow:0 2px 10px rgba(0,0,0,.2);padding:5px 9px;font-family:Arial,sans-serif;font-size:13px;line-height:1.5;white-space:nowrap;}
		            @media (max-width:600px){ .skt-wf-legend{gap:10px;font-size:12px;} }
		        </style>';
		    }

		    $wrapCode .= '
		    <div class="skt-wf-bg">
		        <div class="skt-wf-card">
		            <div id="' . esc_attr( $chart_id ) . '" class="skt-wf-chart"></div>
		        </div>
		        ' . $legend_html . '
		    </div>

		    <script>
		    (function(){
		        window.sktWfCharts = window.sktWfCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");
		            if(!el){ return; }

		            var card = el.parentNode;
		            var TIPS = ' . wp_json_encode( $tips ) . ';

		            var data = new google.visualization.DataTable();
		            data.addColumn("string", "Day");
		            data.addColumn("number", "Low");
		            data.addColumn("number", "Open");
		            data.addColumn("number", "Close");
		            data.addColumn("number", "High");
		            data.addRows(' . wp_json_encode( $data_rows ) . ');

		            var chart = new google.visualization.CandlestickChart(el);

		            var tip = document.createElement("div");
		            tip.className = "skt-wf-tip";
		            card.appendChild(tip);

		            var lastX = 0, lastY = 0;

		            function positionTip(){
		                var cw = card.clientWidth, tw = tip.offsetWidth, th = tip.offsetHeight;
		                var x = lastX + 14;
		                if(x + tw > cw) x = lastX - tw - 14;
		                if(x < 2) x = 2;
		                var y = lastY - th - 12;
		                if(y < 0) y = lastY + 18;
		                tip.style.left = x + "px";
		                tip.style.top  = y + "px";
		            }

		            card.addEventListener("mousemove", function(e){
		                var r = card.getBoundingClientRect();
		                lastX = e.clientX - r.left;
		                lastY = e.clientY - r.top;
		                if(tip.style.display === "block"){ positionTip(); }
		            });

		            google.visualization.events.addListener(chart, "onmouseover", function(ev){
		                if(ev.row == null || !TIPS[ev.row]){ return; }
		                tip.innerHTML = TIPS[ev.row];
		                tip.style.display = "block";
		                positionTip();
		            });
		            google.visualization.events.addListener(chart, "onmouseout", function(){
		                tip.style.display = "none";
		            });

		            google.visualization.events.addListener(chart, "select", function(){
		                chart.setSelection([]);
		            });

		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 600;
		                var h = Math.round(Math.max(320, Math.min(500, w * 0.55)));
		                var small = w < 520;

		                chart.draw(data, {
		                    legend: "none",
		                    height: h,
		                    tooltip: { trigger: "none" },
		                    backgroundColor: { fill: "transparent" },
		                    bar: { groupWidth: "70%" },
		                    candlestick: {
		                        risingColor:  { strokeWidth: 1, stroke: "' . esc_js( $risingcolor ) . '",  fill: "' . esc_js( $risingcolor ) . '" },
		                        fallingColor: { strokeWidth: 1, stroke: "' . esc_js( $fallingcolor ) . '", fill: "' . esc_js( $fallingcolor ) . '" }
		                    },
		                    hAxis: { textStyle: { color: "' . esc_js( $text_color ) . '", fontSize: small ? 10 : 12 } },
		                    vAxis: {
		                        textStyle: { color: "' . esc_js( $text_color ) . '", fontSize: small ? 10 : 12 },
		                        gridlines: { color: "rgba(0,0,0,0.10)" },
		                        minorGridlines: { color: "rgba(0,0,0,0.04)" }
		                    },
		                    chartArea: { width: small ? "82%" : "88%", height: "72%", backgroundColor: "transparent" }
		                });
		            }

		            draw();
		            window.sktWfCharts.push(draw);

		            if(!window.sktWfResizeBound){
		                window.sktWfResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktWfCharts.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_combochart':
		    static $combo_counter   = 0;
		    static $combo_style_done = false;
		    $combo_counter++;
		    $wrapCode = '';
		    $chart_id = 'combochart_' . $combo_counter;

		    $columns = ! empty( $columns ) ? array_map( 'trim', explode( '|', $columns ) ) : array();

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : 'Combo Chart';
		    $haxis_title = ! empty( $haxis_title ) ? sanitize_text_field( $haxis_title ) : '';
		    $vaxis_title = ! empty( $vaxis_title ) ? sanitize_text_field( $vaxis_title ) : '';

		    preg_match_all( '/title="([^"]+)".*?values="([^"]+)"/', $content, $matches, PREG_SET_ORDER );

		    $raw_rows = array();
		    $max_vals = 0;
		    foreach ( $matches as $row ) {
		        $label = sanitize_text_field( $row[1] );
		        $vals  = array_map( 'trim', explode( '|', $row[2] ) );
		        $nums  = array();
		        foreach ( $vals as $v ) {
		            $nums[] = is_numeric( $v ) ? (float) $v : 0;
		        }
		        $max_vals   = max( $max_vals, count( $nums ) );
		        $raw_rows[] = array( 'label' => $label, 'vals' => $nums );
		    }

		    $col_count = ! empty( $columns ) ? count( $columns ) : $max_vals;

		    $header = array( 'Month' );
		    for ( $i = 0; $i < $col_count; $i++ ) {
		        $header[] = isset( $columns[ $i ] ) ? sanitize_text_field( $columns[ $i ] ) : 'Series ' . ( $i + 1 );
		    }

		    $chart_data = array( $header );
		    foreach ( $raw_rows as $r ) {
		        $line = array( $r['label'] );
		        for ( $i = 0; $i < $col_count; $i++ ) {
		            $line[] = isset( $r['vals'][ $i ] ) ? $r['vals'][ $i ] : 0;
		        }
		        $chart_data[] = $line;
		    }

		    $line_series_index = max( 0, $col_count - 1 );

		    $wrapCode .= '
		    <div class="skt-combo-bg">
		        <div class="skt-combo-card">
		            <div id="' . esc_attr( $chart_id ) . '" class="skt-combo-chart"></div>
		        </div>
		    </div>

		    <script>
		    (function(){
		        window.sktComboCharts = window.sktComboCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");
		            if(!el){ return; }

		            var data  = google.visualization.arrayToDataTable(' . wp_json_encode( $chart_data ) . ');
		            var chart = new google.visualization.ComboChart(el);
		            var first = true;

		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 600;
		                var h = Math.round(Math.max(320, Math.min(500, w * 0.55)));
		                var small = w < 520;

		                var options = {
		                    height: h,
		                    title: ' . wp_json_encode( $chart_title ) . ',
		                    titleTextStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 14 : 18 },
		                    backgroundColor: { fill: "transparent" },
		                    legend: { position: "top", textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 11 : 13 } },
		                    seriesType: "bars",
		                    series: { ' . intval( $line_series_index ) . ': { type: "line" } },
		                    hAxis: {
		                        title: ' . wp_json_encode( $haxis_title ) . ',
		                        titleTextStyle: { color: "'. esc_attr( $text_color ) .'" },
		                        textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 10 : 12 },
		                        slantedText: small, slantedTextAngle: 45
		                    },
		                    vAxis: {
		                        title: ' . wp_json_encode( $vaxis_title ) . ',
		                        titleTextStyle: { color: "'. esc_attr( $text_color ) .'" },
		                        textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 10 : 12 },
		                        gridlines: { color: "rgba(255,255,255,0.15)" },
		                        minorGridlines: { color: "rgba(255,255,255,0.05)" }
		                    },
		                    chartArea: { width: small ? "78%" : "85%", height: small ? "60%" : "70%", backgroundColor: "transparent" }
		                };

		                if(first){ options.animation = { startup: true, duration: 1000, easing: "out" }; first = false; }
		                chart.draw(data, options);
		            }

		            draw();
		            window.sktComboCharts.push(draw);

		            if(!window.sktComboResizeBound){
		                window.sktComboResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktComboCharts.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_piediff':

		    static $pie_counter = 0;
		    $pie_counter++;
		    $wrapCode = '';
		    $base_id = 'pie_' . $pie_counter;

		    $oldData = array(array('Major', 'Degrees'));
		    $newData = array(array('Major', 'Degrees'));

		    preg_match_all(
		        '/title="([^"]+)".*?old="([^"]+)".*?new="([^"]+)"/',
		        $content,
		        $matches,
		        PREG_SET_ORDER
		    );

		    foreach ($matches as $row) {

		        $label = sanitize_text_field($row[1]);

		        $oldData[] = array($label, (float)$row[2]);
		        $newData[] = array($label, (float)$row[3]);
		    }

		    $wrapCode .= '
		    <div style="display:flex;gap:20px;flex-wrap:wrap;">
		        <div>
		        <div id="' . esc_attr($base_id . '_before') . '" style="width:450px;height:300px;"></div>
		        <div class="skt-char-bottom-title" style="color:'. esc_attr( $title_color ) .'">'. $title_old .'</div>
		        </div>
		        <div>        
		        <div id="' . esc_attr($base_id . '_after') . '" style="width:450px;height:300px;"></div>
		        <div class="skt-char-bottom-title" style="color:'. esc_attr( $title_color ) .'">'. $title_new .'</div>
		        </div>
		    </div>
		    <div style="display:flex;gap:20px;flex-wrap:wrap;">
		    <div>
		    <div id="' . esc_attr($base_id . '_diff') . '" style="width:450px;height:300px;margin-top:20px;"></div>
		    <div class="skt-char-bottom-title" style="color:'. esc_attr( $title_color ) .'">'. esc_attr($combine_title ) .'</div>
		    </div></div>
		    <script>

		    google.charts.load("current", {packages:["corechart"]});

		    google.charts.setOnLoadCallback(function(){

		        var oldData = google.visualization.arrayToDataTable(' . wp_json_encode($oldData) . ');
		        var newData = google.visualization.arrayToDataTable(' . wp_json_encode($newData) . ');

		        var options = {
		            pieSliceText: "none"
		        };

		        var chartBefore = new google.visualization.PieChart(
		            document.getElementById("' . esc_js($base_id . '_before') . '")
		        );

		        var chartAfter = new google.visualization.PieChart(
		            document.getElementById("' . esc_js($base_id . '_after') . '")
		        );

		        var chartDiff = new google.visualization.PieChart(
		            document.getElementById("' . esc_js($base_id . '_diff') . '")
		        );

		        chartBefore.draw(oldData, options);
		        chartAfter.draw(newData, options);

		        var diffData = chartDiff.computeDiff(oldData, newData);
		        chartDiff.draw(diffData, options);

		    });

		    </script>';
		break;

		case 'skt_columndiff':
		    $wrapCode = '';
		    static $coldiff_counter   = 0;
		    static $coldiff_style_done = false;
		    $coldiff_counter++;
		    $base_id = 'coldiff_' . $coldiff_counter;

		    $colors_array = ! empty( $column_color )
		        ? array_map( 'trim', explode( '|', $column_color ) )
		        : array( '#4285F4', '#EA4335' );

		    $label_header = ! empty( $label_header ) ? sanitize_text_field( $label_header ) : 'Major';
		    $value_label  = ! empty( $value_label )  ? sanitize_text_field( $value_label )  : 'Degrees';
		    $before_title = ! empty( $before_title ) ? sanitize_text_field( $before_title ) : 'Before';
		    $after_title  = ! empty( $after_title )  ? sanitize_text_field( $after_title )  : 'After';
		    $diff_title   = ! empty( $diff_title )   ? sanitize_text_field( $diff_title )   : 'Difference';
		    $show_bar     = ( isset( $show_bar_diff ) && $show_bar_diff === 'yes' );

		    $oldData = array( array( $label_header, $value_label ) );
		    $newData = array( array( $label_header, $value_label ) );

		    preg_match_all( '/title="([^"]+)".*?old="([^"]+)".*?new="([^"]+)"/', $content, $matches, PREG_SET_ORDER );

		    foreach ( $matches as $row ) {
		        $label     = sanitize_text_field( $row[1] );
		        $oldData[] = array( $label, (float) $row[2] );
		        $newData[] = array( $label, (float) $row[3] );
		    }

		    if ( ! $coldiff_style_done ) {
		        $coldiff_style_done = true;
		        $wrapCode .= '
		        <style>
		            .skt-cd-grid{position:relative;z-index:1;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;}
		            .skt-cd-card{position:relative;z-index:1;backdrop-filter:blur(4px);}
		            .skt-cd-chart{width:100%;}
		            @keyframes sktCdAurora{ to{ transform:rotate(360deg); } }
		            @media (max-width:600px){ .skt-cd-bg{padding:12px;border-radius:12px;} }
		            @media (prefers-reduced-motion:reduce){ .skt-cd-bg::before{animation:none;} }
		        </style>';
		    }

		    $wrapCode .= '
		    <div class="skt-cd-bg">
		        <div class="skt-cd-grid">
		            <div class="skt-cd-card"><div id="' . esc_attr( $base_id . '_before' ) . '" class="skt-cd-chart"></div></div>
		            <div class="skt-cd-card"><div id="' . esc_attr( $base_id . '_after' ) . '" class="skt-cd-chart"></div></div>
		        </div>
		        <div class="skt-cd-card" style="margin-top:16px;"><div id="' . esc_attr( $base_id . '_diff' ) . '" class="skt-cd-chart"></div></div>';

		    if ( $show_bar ) {
		        $wrapCode .= '
		        <div class="skt-cd-card" style="margin-top:16px;"><div id="' . esc_attr( $base_id . '_bardiff' ) . '" class="skt-cd-chart"></div></div>';
		    }

		    $wrapCode .= '
		    </div>

		    <script>
		    (function(){
		        window.sktCdCharts = window.sktCdCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var oldData = google.visualization.arrayToDataTable(' . wp_json_encode( $oldData ) . ');
		            var newData = google.visualization.arrayToDataTable(' . wp_json_encode( $newData ) . ');

		            var elB = document.getElementById("' . esc_js( $base_id . '_before' ) . '");
		            var elA = document.getElementById("' . esc_js( $base_id . '_after' ) . '");
		            var elD = document.getElementById("' . esc_js( $base_id . '_diff' ) . '");
		            ' . ( $show_bar ? 'var elBar = document.getElementById("' . esc_js( $base_id . '_bardiff' ) . '");' : 'var elBar = null;' ) . '

		            var cB = new google.visualization.ColumnChart(elB);
		            var cA = new google.visualization.ColumnChart(elA);
		            var cD = new google.visualization.ColumnChart(elD);
		            var cBar = elBar ? new google.visualization.BarChart(elBar) : null;

		            var diffData = cD.computeDiff(oldData, newData);
		            var COLORS = ' . wp_json_encode( $colors_array ) . ';
		            var first = true;

		            function opts(el, title){
		                var w = el.clientWidth || el.offsetWidth || 400;
		                var h = Math.round(Math.max(240, Math.min(340, w * 0.62)));
		                var small = w < 380;
		                var o = {
		                    height: h,
		                    title: title,
		                    colors: COLORS,
		                    backgroundColor: { fill: "transparent" },
		                    titleTextStyle: { color: "#ffffff", fontSize: small ? 13 : 16 },
		                    legend: { position: "top", textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 10 : 12 } },
		                    hAxis: { textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 9 : 11 }, slantedText: true, slantedTextAngle: 30 },
		                    vAxis: { textStyle: { color: "'. esc_attr( $text_color ) .'", fontSize: small ? 9 : 11 }, gridlines: { color: "rgba(255,255,255,0.15)" } },
		                    chartArea: { width: "80%", height: "62%", backgroundColor: "transparent" }
		                };
		                if(first){ o.animation = { startup: true, duration: 900, easing: "out" }; }
		                return o;
		            }

		            function drawAll(){
		                cB.draw(oldData,  opts(elB, ' . wp_json_encode( $before_title ) . '));
		                cA.draw(newData,  opts(elA, ' . wp_json_encode( $after_title ) . '));
		                cD.draw(diffData, opts(elD, ' . wp_json_encode( $diff_title ) . '));
		                if(cBar){ cBar.draw(diffData, opts(elBar, ' . wp_json_encode( $diff_title ) . ' + " (Bar)")); }
		                first = false;
		            }

		            drawAll();
		            window.sktCdCharts.push(drawAll);

		            if(!window.sktCdResizeBound){
		                window.sktCdResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktCdCharts.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_steppedarea':
		    $wrapCode = '';
		    static $stepped_counter = 0;
		    static $stepped_style_done = false;
		    $stepped_counter++;

		    $base_id = 'stepped_' . $stepped_counter;

		    $chart_title = ! empty( $steppedchart_title ) ? sanitize_text_field( $steppedchart_title ) : 'Stepped Area Chart';
		    $axis_title  = ! empty( $axis_title ) ? sanitize_text_field( $axis_title ) : 'Accumulated Rating';


		    $text_color = ! empty( $text_color ) ? trim( $text_color ) : '#ffffff';
		    if ( $text_color[0] !== '#' && preg_match( '/^[0-9a-fA-F]{3,8}$/', $text_color ) ) {
		        $text_color = '#' . $text_color;
		    }
		    $text_color = esc_js( $text_color );

		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );

		    $rows       = array();
		    $max_series = 0;

		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );

		        $pairs = array();
		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }

		        $label  = isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '';
		        $values = array();

		        $i = 1;
		        while ( isset( $pairs[ 'v' . $i ] ) ) {
		            $values[] = (float) $pairs[ 'v' . $i ];
		            $i++;
		        }

		        $max_series = max( $max_series, count( $values ) );
		        $rows[]     = array( 'label' => $label, 'values' => $values );
		    }


		    $series_list = array();
		    for ( $n = 1; $n <= 8; $n++ ) {
		        $var = 'series' . $n;
		        if ( isset( $$var ) && $$var !== '' ) {
		            $series_list[] = sanitize_text_field( $$var );
		        }
		    }
		    if ( empty( $series_list ) && ! empty( $series_names ) ) {
		        $series_list = array_map( 'trim', explode( '|', $series_names ) );
		    }

		    $header = array( 'Label' );
		    for ( $i = 0; $i < $max_series; $i++ ) {
		        $header[] = isset( $series_list[ $i ] ) ? $series_list[ $i ] : 'Series ' . ( $i + 1 );
		    }

		    $chartData = array( $header );
		    foreach ( $rows as $r ) {
		        $line = array( $r['label'] );
		        for ( $i = 0; $i < $max_series; $i++ ) {
		            $line[] = isset( $r['values'][ $i ] ) ? $r['values'][ $i ] : 0;
		        }
		        $chartData[] = $line;
		    }

		    $default_palette = array( '#4285F4', '#EA4335', '#FBBC05', '#34A853', '#FF6D01', '#46BDC6', '#7B61FF', '#AB47BC' );
		    $colors_array = ! empty( $stepped_color )
		        ? array_map( 'trim', explode( '|', $stepped_color ) )
		        : array_slice( $default_palette, 0, max( 1, $max_series ) );

		    $wrapCode .= '
		    <div class="skt-stepped-bg">
		        <div class="skt-stepped-card">
		            <div id="' . esc_attr( $base_id ) . '" class="skt-stepped-chart"></div>
		        </div>
		    </div>

		    <script>
		    (function(){
		        window.sktSteppedCharts = window.sktSteppedCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var el   = document.getElementById("' . esc_js( $base_id ) . '");
		            if(!el){ return; }

		            var data  = google.visualization.arrayToDataTable(' . wp_json_encode( $chartData ) . ');
		            var chart = new google.visualization.SteppedAreaChart(el);
		            var first = true;

		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 600;
		                var h = Math.round(Math.max(300, Math.min(480, w * 0.55)));
		                var small = w < 520;

		                var options = {
		                    height: h,
		                    title: ' . wp_json_encode( $chart_title ) . ',
		                    isStacked: true,
		                    colors: ' . wp_json_encode( $colors_array ) . ',
		                    backgroundColor: { fill: "transparent" },
		                    titleTextStyle: { color: "' . esc_attr( $text_color ) . '", fontSize: small ? 14 : 18 },
		                    legend: { position: "top", textStyle: { color: "' . esc_attr( $text_color ) . '", fontSize: small ? 11 : 13 } },
		                    hAxis: {
		                        textStyle: { color: "' . esc_attr( $text_color ) . '", fontSize: small ? 10 : 12 },
		                        slantedText: true,
		                        slantedTextAngle: small ? 60 : 30
		                    },
		                    vAxis: {
		                        title: ' . wp_json_encode( $axis_title ) . ',
		                        titleTextStyle: { color: "' . esc_attr( $text_color ) . '" },
		                        textStyle: { color: "' . esc_attr( $text_color ) . '", fontSize: small ? 10 : 12 },
		                        gridlines: { color: "rgba(255,255,255,0.15)" },
		                        minorGridlines: { color: "rgba(255,255,255,0.05)" }
		                    },
		                    chartArea: { width: small ? "78%" : "85%", height: small ? "58%" : "70%", backgroundColor: "transparent" }
		                };

		                if(first){ options.animation = { startup: true, duration: 1000, easing: "out" }; first = false; }

		                chart.draw(data, options);
		            }

		            draw();
		            window.sktSteppedCharts.push(draw);

		            if(!window.sktSteppedResizeBound){
		                window.sktSteppedResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){
		                        window.sktSteppedCharts.forEach(function(fn){ fn(); });
		                    }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_pie3d':
		    static $pie3d_counter = 0;
		    $pie3d_counter++;
		    $wrapCode = '';
		    $chart_id = 'pie3d_' . $pie3d_counter;

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : '';
		    $text_color  = ! empty( $text_color )  ? sanitize_text_field( $text_color )  : '#333333';

		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );

		    $chartData = array( array( 'Label', 'Value' ) );
		    $slices    = array();

		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
		        $pairs = array();
		        foreach ( $attrs as $a ) {
		        	$pairs[ $a[1] ] = $a[2];
		        }
		        $label = isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '';
		        $value = isset( $pairs['value'] ) ? (float) $pairs['value'] : 0;
		        $chartData[] = array( $label, $value );

		        $color = '';
		        if ( isset( $pairs['backgroundcolr'] ) ) {
		            $color = sanitize_text_field( $pairs['backgroundcolr'] );
		        } elseif ( isset( $pairs['backgroundcolor'] ) ) {
		            $color = sanitize_text_field( $pairs['backgroundcolor'] );
		        } elseif ( isset( $pairs['color'] ) ) {
		            $color = sanitize_text_field( $pairs['color'] );
		        }

		        $slices[] = ( $color !== '' ) ? array( 'color' => $color ) : (object) array();
		    }

		    if ( count( $chartData ) < 2 ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-pie3d-wrap" style="position:relative;width:100%;max-width:900px;margin:0 auto;">
		        <div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		    </div>
		    <script>
		    (function(){
		        window.sktPie3dCharts = window.sktPie3dCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");
		            if(!el){ return; }

		            var data   = google.visualization.arrayToDataTable(' . wp_json_encode( $chartData ) . ');
		            var chart  = new google.visualization.PieChart(el);
		            var SLICES = ' . wp_json_encode( $slices ) . ';

		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 600;
		                var h = Math.round(Math.max(300, Math.min(500, w * 0.6)));
		                var small = w < 480;

		                chart.draw(data, {
		                    title: ' . wp_json_encode( $chart_title ) . ',
		                    is3D: true,
		                    height: h,
		                    backgroundColor: { fill: "transparent" },
		                    titleTextStyle: { color: "' . esc_js( $text_color ) . '", fontSize: small ? 15 : 18 },
		                    legend: { textStyle: { color: "' . esc_js( $text_color ) . '", fontSize: small ? 11 : 13 } },
		                    chartArea: { width: "90%", height: "80%" },
		                    slices: SLICES
		                });
		            }

		            draw();
		            window.sktPie3dCharts.push(draw);

		            if(!window.sktPie3dResizeBound){
		                window.sktPie3dResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktPie3dCharts.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_timeline':
		    static $timeline_counter = 0;
		    $timeline_counter++;

		    $wrapCode = '';
		    $chart_id = 'timeline_' . $timeline_counter;

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : '';

		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );

		    $rows = array();

		    foreach ( $skill_matches as $sk ) {

		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );

		        $pairs = array();

		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }

		        $term  = isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '';
		        $name  = isset( $pairs['name'] ) ? sanitize_text_field( $pairs['name'] ) : '';
		        $start = isset( $pairs['start'] ) ? $pairs['start'] : '';
		        $end   = isset( $pairs['end'] ) ? $pairs['end'] : '';

		        if ( empty( $start ) || empty( $end ) ) {
		            continue;
		        }

		        $start_ts = strtotime( $start );
		        $end_ts   = strtotime( $end );

		        if ( ! $start_ts || ! $end_ts ) {
		            continue;
		        }

		        $rows[] = array(
		            $term,
		            $name,
		            array(
		                'year'  => (int) gmdate( 'Y', $start_ts ),
		                'month' => (int) gmdate( 'n', $start_ts ) - 1,
		                'day'   => (int) gmdate( 'j', $start_ts ),
		            ),
		            array(
		                'year'  => (int) gmdate( 'Y', $end_ts ),
		                'month' => (int) gmdate( 'n', $end_ts ) - 1,
		                'day'   => (int) gmdate( 'j', $end_ts ),
		            ),
		        );
		    }

		    if ( empty( $rows ) ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-timeline-wrap" style="position:relative;width:100%;">
		    	<div>
		    		<div class="skt-timeline-heading" style="color:'. $chart_title_color .'">' . esc_attr( $chart_title ) . '</div>
		        	<div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		        </div>
		    </div>

		    <script>
		    (function(){

		        window.sktTimelineCharts = window.sktTimelineCharts || [];

		        google.charts.load("current", {packages:["timeline"]});

		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");

		            if(!el){
		                return;
		            }

		            var chart = new google.visualization.Timeline(el);

		            var ROWS = ' . wp_json_encode( $rows ) . ';

		            function draw(){

		                var dataTable = new google.visualization.DataTable();

		                dataTable.addColumn({ type: "string", id: "Term" });
		                dataTable.addColumn({ type: "string", id: "Name" });
		                dataTable.addColumn({ type: "date", id: "Start" });
		                dataTable.addColumn({ type: "date", id: "End" });

		                ROWS.forEach(function(row){

		                    dataTable.addRow([
		                        row[0],
		                        row[1],
		                        new Date(
		                            row[2].year,
		                            row[2].month,
		                            row[2].day
		                        ),
		                        new Date(
		                            row[3].year,
		                            row[3].month,
		                            row[3].day
		                        )
		                    ]);

		                });

		                var w = el.clientWidth || 600;
		                var h = Math.max(200, ROWS.length * 50);

		                chart.draw(dataTable, {
		                    height: h
		                });
		            }

		            draw();

		            window.sktTimelineCharts.push(draw);

		            if(!window.sktTimelineResizeBound){

		                window.sktTimelineResizeBound = true;

		                var timer;

		                window.addEventListener("resize", function(){

		                    clearTimeout(timer);

		                    timer = setTimeout(function(){

		                        window.sktTimelineCharts.forEach(function(fn){
		                            fn();
		                        });

		                    }, 200);

		                });
		            }

		        });

		    })();
		    </script>';
		break;

		case 'skt_geochart':

		    static $geochart_counter = 0;
		    $geochart_counter++;
		    $wrapCode = '';
		    $chart_id = 'geochart_' . $geochart_counter;

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : '';
		    $text_color  = ! empty( $text_color ) ? sanitize_text_field( $text_color ) : '#333333';
		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );
		    $chartData = array(
		        array( 'Country', 'Popularity' )
		    );

		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
		        $pairs = array();
		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }
		        $country = isset( $pairs['country'] ) ? sanitize_text_field( $pairs['country'] ) : '';
		        $value = isset( $pairs['value'] ) ? (float) $pairs['value'] : 0;
		        if ( $country === '' ) {
		            continue;
		        }
		        $chartData[] = array(
		            $country,
		            $value
		        );
		    }

		    if ( count( $chartData ) < 2 ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-geochart-wrap" style="position:relative;width:100%;max-width:1000px;margin:0 auto;">
		    	<div style="color:'. $chart_title_color .'">' . esc_attr( $chart_title ) . '</div>
		        <div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		    </div>

		    <script>
		    (function(){
		        window.sktGeoCharts = window.sktGeoCharts || [];
		        google.charts.load("current", {
		            packages:["geochart"]
		        });

		        google.charts.setOnLoadCallback(function(){
		            var el = document.getElementById("' . esc_js( $chart_id ) . '");

		            if(!el){
		                return;
		            }
		            var data = google.visualization.arrayToDataTable(
		                ' . wp_json_encode( $chartData ) . '
		            );
		            var chart = new google.visualization.GeoChart(el);
		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 800;
		                var h = Math.round(
		                    Math.max(
		                        300,
		                        Math.min(600, w * 0.60)
		                    )
		                );

		                chart.draw(data, {
		                    height: h,
		                    backgroundColor: {
		                        fill: "transparent"
		                    },

		                    datalessRegionColor: "#f5f5f5",
		                    defaultColor: "#e5e5e5",

		                    colorAxis: {
		                        colors: [
		                            "'. esc_attr( $start_range_color ) .'",
		                            "'. esc_attr( $end_range_color ) .'"
		                        ]
		                    },

		                    legend: {
		                        textStyle: {
		                            color: "' . esc_js( $text_color ) . '"
		                        }
		                    },

		                    tooltip: {
		                        textStyle: {
		                            color: "#000000"
		                        }
		                    }
		                });
		            }
		            draw();

		            window.sktGeoCharts.push(draw);
		            if(!window.sktGeoResizeBound){
		                window.sktGeoResizeBound = true;
		                var resizeTimer;
		                window.addEventListener("resize", function(){
		                    clearTimeout(resizeTimer);
		                    resizeTimer = setTimeout(function(){
		                        window.sktGeoCharts.forEach(function(fn){
		                            fn();
		                        });

		                    }, 200);
		                });
		            }
		        });

		    })();
		    </script>';
		break;

		case 'skt_datatable':
		    static $dt_counter = 0;
		    $dt_counter++;
		    $wrapCode = '';
		    $table_id = 'datatable_' . $dt_counter;

		    $show_row_number = ( isset( $show_row_number ) && $show_row_number === 'yes' );

		    $col_defs = array();
		    if ( ! empty( $columns ) ) {
		        foreach ( explode( '|', $columns ) as $c ) {
		            $parts = explode( ':', $c );
		            $name  = isset( $parts[0] ) ? sanitize_text_field( trim( $parts[0] ) ) : '';
		            $type  = isset( $parts[1] ) ? strtolower( trim( $parts[1] ) ) : null;  // null = auto-detect
		            if ( $type !== null && ! in_array( $type, array( 'string', 'number', 'boolean', 'date' ), true ) ) {
		                $type = null;
		            }
		            $col_defs[] = array( 'label' => $name, 'type' => $type );
		        }
		    }

		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );
		    $raw_rows = array();
		    $maxc = 0;
		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
		        $pairs = array();
		        foreach ( $attrs as $a ) { $pairs[ $a[1] ] = $a[2]; }
		        if ( ! isset( $pairs['values'] ) ) { continue; }
		        $vals = array_map( 'trim', explode( '|', $pairs['values'] ) );
		        $maxc = max( $maxc, count( $vals ) );
		        $raw_rows[] = $vals;
		    }

		    if ( empty( $col_defs ) ) {
		        for ( $i = 0; $i < $maxc; $i++ ) {
		            $col_defs[] = array( 'label' => 'Column ' . ( $i + 1 ), 'type' => null );
		        }
		    }

		    if ( empty( $col_defs ) || empty( $raw_rows ) ) {
		        return '';
		    }

		    foreach ( $col_defs as $i => $col ) {
		        if ( $col['type'] !== null ) { continue; }

		        $any = false; $all_num = true; $boolish = true; $has_text_bool = false;
		        foreach ( $raw_rows as $vals ) {
		            $v = isset( $vals[ $i ] ) ? $vals[ $i ] : '';
		            if ( strpos( $v, '::' ) !== false ) { $p = explode( '::', $v, 2 ); $v = trim( $p[0] ); }
		            if ( $v === '' ) { continue; }
		            $any = true;
		            $lower = strtolower( $v );

		            if ( ! in_array( $lower, array( 'true', 'false', 'yes', 'no', '1', '0' ), true ) ) { $boolish = false; }
		            if ( in_array( $lower, array( 'true', 'false', 'yes', 'no' ), true ) ) { $has_text_bool = true; }

		            $looks_id = ( ctype_digit( $v ) && ( strlen( $v ) >= 8 || ( $v[0] === '0' && strlen( $v ) > 1 ) ) );
		            if ( ! is_numeric( $v ) || $looks_id ) { $all_num = false; }
		        }

		        if ( ! $any )                          { $col_defs[ $i ]['type'] = 'string'; }
		        elseif ( $boolish && $has_text_bool )  { $col_defs[ $i ]['type'] = 'boolean'; }
		        elseif ( $all_num )                    { $col_defs[ $i ]['type'] = 'number'; }
		        else                                   { $col_defs[ $i ]['type'] = 'string'; }
		    }

		    $js_rows = array();
		    foreach ( $raw_rows as $vals ) {
		        $row = array();
		        foreach ( $col_defs as $i => $col ) {
		            $raw = isset( $vals[ $i ] ) ? $vals[ $i ] : '';
		            $fmt = null;
		            if ( strpos( $raw, '::' ) !== false ) {
		                $p   = explode( '::', $raw, 2 );
		                $raw = trim( $p[0] );
		                $fmt = trim( $p[1] );
		            }
		            switch ( $col['type'] ) {
		                case 'number':
		                    $n     = (float) $raw;
		                    $typed = ( $n == (int) $n ) ? (int) $n : $n;
		                    break;
		                case 'boolean':
		                    $typed = in_array( strtolower( $raw ), array( 'true', '1', 'yes' ), true );
		                    break;
		                default:
		                    $typed = sanitize_text_field( $raw );
		            }
		            $row[] = ( $fmt !== null && $fmt !== '' )
		                ? array( 'v' => $typed, 'f' => sanitize_text_field( $fmt ) )
		                : $typed;
		        }
		        $js_rows[] = $row;
		    }

		    $wrapCode .= '
		    <div class="skt-dt-wrap" style="width:100%;overflow-x:auto;">
		        <div id="' . esc_attr( $table_id ) . '"></div>
		    </div>
		    <script>
		    (function(){
		        window.sktDtTables = window.sktDtTables || [];

		        google.charts.load("current", {packages:["table"]});
		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $table_id ) . '");
		            if(!el){ return; }

		            var data = new google.visualization.DataTable();
		            var COLS = ' . wp_json_encode( $col_defs ) . ';
		            COLS.forEach(function(c){ data.addColumn(c.type, c.label); });
		            data.addRows(' . wp_json_encode( $js_rows ) . ');

		            var table = new google.visualization.Table(el);

		            function draw(){
		                table.draw(data, {
		                    showRowNumber: ' . ( $show_row_number ? 'true' : 'false' ) . ',
		                    width: "100%",
		                    height: "100%",
		                    allowHtml: true
		                });
		            }

		            draw();
		            window.sktDtTables.push(draw);

		            if(!window.sktDtResizeBound){
		                window.sktDtResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktDtTables.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_lineinterval':

		    static $interval_counter = 0;
		    $interval_counter++;

		    $wrapCode = '';

		    $chart_id = 'lineinterval_' . $interval_counter;

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : 'Line Intervals Chart';

		    preg_match_all(
		        '/\[skill\s+([^\]]+)\]/',
		        $content,
		        $skill_matches,
		        PREG_SET_ORDER
		    );

		    $chartData = array();
		    $max_intervals = 0;

		    foreach ( $skill_matches as $sk ) {

		        preg_match_all(
		            '/(\w+)="([^"]*)"/',
		            $sk[1],
		            $attrs,
		            PREG_SET_ORDER
		        );

		        $pairs = array();

		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }

		        $row = array();

		        $row[] = isset( $pairs['x'] ) ? (float) $pairs['x'] : 0;
		        $row[] = isset( $pairs['value'] ) ? (float) $pairs['value'] : 0;

		        $intervals = array();

		        foreach ( $pairs as $key => $val ) {

		            if ( preg_match( '/^interval(\d+)$/', $key ) ) {
		                $intervals[] = (float) $val;
		            }
		        }

		        sort( $intervals );

		        $max_intervals = max( $max_intervals, count( $intervals ) );

		        $row = array_merge( $row, $intervals );

		        $chartData[] = $row;
		    }

		    if ( empty( $chartData ) ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-lineinterval-wrap" style="position:relative;width:100%;max-width:900px;margin:0 auto;">
		        <div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		    </div>

		    <script>
		    (function(){

		        window.sktLineIntervalCharts = window.sktLineIntervalCharts || [];

		        google.charts.load("current", {
		            packages:["corechart"]
		        });

		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");

		            if(!el){
		                return;
		            }

		            var ROWS = ' . wp_json_encode( $chartData ) . ';
		            var INTERVAL_COUNT = ' . (int) $max_intervals . ';

		            function draw(){

		                var data = new google.visualization.DataTable();

		                data.addColumn("number", "X");
		                data.addColumn("number", "Values");

		                for(var i = 0; i < INTERVAL_COUNT; i++){

		                    data.addColumn({
		                        id: "i" + i,
		                        type: "number",
		                        role: "interval"
		                    });

		                }

		                ROWS.forEach(function(row){

		                    var r = row.slice();

		                    while(r.length < (2 + INTERVAL_COUNT)){
		                        r.push(null);
		                    }

		                    data.addRow(r);

		                });

		                var w = el.clientWidth || 600;
		                var h = Math.max(300, Math.min(500, w * 0.6));

		                var chart = new google.visualization.LineChart(el);

		                chart.draw(data, {

		                    title: ' . wp_json_encode( $chart_title ) . ',

		                    curveType: "function",

		                    lineWidth: 4,

		                    intervals: {
		                        style: "line"
		                    },

		                    legend: "none",

		                    height: h,

		                    chartArea: {
		                        width: "85%",
		                        height: "75%"
		                    }
		                });

		            }

		            draw();

		            window.sktLineIntervalCharts.push(draw);

		            if(!window.sktLineIntervalResizeBound){

		                window.sktLineIntervalResizeBound = true;

		                var timer;

		                window.addEventListener("resize", function(){

		                    clearTimeout(timer);

		                    timer = setTimeout(function(){

		                        window.sktLineIntervalCharts.forEach(function(fn){
		                            fn();
		                        });

		                    }, 200);

		                });

		            }

		        });

		    })();
		    </script>';
		break;


		case 'skt_areachart':

		    static $area_counter = 0;
		    $area_counter++;

		    $wrapCode = '';

		    $chart_id = 'areachart_' . $area_counter;

		    $raw         = ( isset( $atts ) && is_array( $atts ) ) ? $atts : array();
			$chart_title = ! empty( $raw['chart_title'] ) ? sanitize_text_field( $raw['chart_title'] )
			             : ( ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : 'Area Chart' );
			$haxis_title = ! empty( $raw['haxis_title'] ) ? sanitize_text_field( $raw['haxis_title'] )
             : ( ! empty( $haxis_title ) ? sanitize_text_field( $haxis_title ) : '' );

		    preg_match_all(
		        '/\[skill\s+([^\]]+)\]/',
		        $content,
		        $skill_matches,
		        PREG_SET_ORDER
		    );

		    $chartData = array(
		        array( 'Year', 'Sales', 'Expenses' )
		    );

		    foreach ( $skill_matches as $sk ) {

		        preg_match_all(
		            '/(\w+)="([^"]*)"/',
		            $sk[1],
		            $attrs,
		            PREG_SET_ORDER
		        );

		        $pairs = array();

		        foreach ( $attrs as $a ) {
		            $pairs[ $a[1] ] = $a[2];
		        }

		        $chartData[] = array(
		            isset( $pairs['year'] ) ? $pairs['year'] : '',
		            isset( $pairs['sales'] ) ? (float) $pairs['sales'] : 0,
		            isset( $pairs['expenses'] ) ? (float) $pairs['expenses'] : 0
		        );
		    }

		    if ( count( $chartData ) < 2 ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-areachart-wrap" style="position:relative;width:100%;max-width:1000px;margin:0 auto;">
		        <div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		    </div>

		    <script>
			    (function(){
			        window.sktAreaCharts = window.sktAreaCharts || [];
			        google.charts.load("current", {
			            packages:["corechart"]
			        });
			        google.charts.setOnLoadCallback(function(){
			            var el = document.getElementById("' . esc_js( $chart_id ) . '");
			            if(!el){
			                return;
			            }
			            var data = google.visualization.arrayToDataTable(
			                ' . wp_json_encode( $chartData ) . '
			            );
			            var chart = new google.visualization.AreaChart(el);
			            function draw(){
			                var w = el.clientWidth || 600;
			                var h = Math.max(300, Math.min(500, w * 0.6));
			                chart.draw(data, {
							    title: ' . wp_json_encode( $chart_title ) . ',
							    titleTextStyle: { color: "' . $color_label . '" },
							    hAxis: {
							        title: ' . wp_json_encode( $haxis_title ) . ',
							        titleTextStyle: { color: "' . $color_label . '" }
							    },
							    vAxis: { minValue: 0 },
							    height: h,
							    legend: { position: "bottom" },
							    chartArea: { width: "85%", height: "70%" }
							});
			            }
			            draw();
			            window.sktAreaCharts.push(draw);
			            if(!window.sktAreaResizeBound){
			                window.sktAreaResizeBound = true;
			                var timer;
			                window.addEventListener("resize", function(){
			                    clearTimeout(timer);
			                    timer = setTimeout(function(){
			                        window.sktAreaCharts.forEach(function(fn){
			                            fn();
			                        });

			                    }, 200);

			                });

			            }
			        });
			    })();
			</script>';
		break;

		case 'skt_trendline':
		    static $trend_counter = 0;
		    $trend_counter++;
		    $wrapCode = '';
		    $chart_id = 'trendline_' . $trend_counter;

		    $chart_title = ! empty( $chart_title ) ? sanitize_text_field( $chart_title ) : '';
		    $x_label     = ! empty( $x_label )     ? sanitize_text_field( $x_label )     : 'X';
		    $y_label     = ! empty( $y_label )     ? sanitize_text_field( $y_label )     : 'Y';
		    $text_color  = ! empty( $text_color )  ? sanitize_text_field( $text_color )  : '#333333';
		    $point_color = ! empty( $point_color ) ? sanitize_text_field( $point_color ) : '';

		    $trend_type = ! empty( $trend_type ) ? strtolower( sanitize_text_field( $trend_type ) ) : 'linear';
		    if ( ! in_array( $trend_type, array( 'linear', 'polynomial', 'exponential' ), true ) ) {
		        $trend_type = 'linear';
		    }
		    $trend_degree = ! empty( $trend_degree ) ? (int) $trend_degree : 3;
		    $trend_color  = ! empty( $trend_color )  ? sanitize_text_field( $trend_color ) : '';
		    $trend_legend = ( isset( $trend_legend ) && $trend_legend === 'yes' );

		    preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );
		    $chartData = array( array( $x_label, $y_label ) );
		    foreach ( $skill_matches as $sk ) {
		        preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
		        $pairs = array();
		        foreach ( $attrs as $a ) { $pairs[ $a[1] ] = $a[2]; }

		        $x = isset( $pairs['x'] ) ? (float) $pairs['x'] : 0;
		        $y = isset( $pairs['y'] ) ? (float) $pairs['y'] : 0;
		        $chartData[] = array( $x, $y );
		    }

		    if ( count( $chartData ) < 2 ) {
		        return '';
		    }

		    $wrapCode .= '
		    <div class="skt-trend-wrap" style="position:relative;width:100%;max-width:900px;margin:0 auto;">
		        <div id="' . esc_attr( $chart_id ) . '" style="width:100%;"></div>
		    </div>
		    <script>
		    (function(){
		        window.sktTrendCharts = window.sktTrendCharts || [];

		        google.charts.load("current", {packages:["corechart"]});
		        google.charts.setOnLoadCallback(function(){

		            var el = document.getElementById("' . esc_js( $chart_id ) . '");
		            if(!el){ return; }

		            var data  = google.visualization.arrayToDataTable(' . wp_json_encode( $chartData ) . ');
		            var chart = new google.visualization.ScatterChart(el);

		            function draw(){
		                var w = el.clientWidth || el.offsetWidth || 600;
		                var h = Math.round(Math.max(320, Math.min(520, w * 0.55)));
		                var small = w < 520;

		                var trend = {
		                    type: "' . esc_js( $trend_type ) . '",
		                    visibleInLegend: ' . ( $trend_legend ? 'true' : 'false' ) . '
		                };
		                ' . ( $trend_type === 'polynomial' ? 'trend.degree = ' . (int) $trend_degree . ';' : '' ) . '
		                ' . ( $trend_color !== '' ? 'trend.color = ' . wp_json_encode( $trend_color ) . ';' : '' ) . '

		                var o = {
		                    title: ' . wp_json_encode( $chart_title ) . ',
		                    height: h,
		                    legend: ' . ( $trend_legend ? '{ position: "top", textStyle: { color: "' . esc_js( $text_color ) . '" } }' : '"none"' ) . ',
		                    crosshair: { trigger: "both", orientation: "both" },
		                    pointSize: small ? 5 : 7,
		                    backgroundColor: { fill: "transparent" },
		                    titleTextStyle: { color: "' . esc_js( $text_color ) . '", fontSize: small ? 14 : 18 },
		                    hAxis: { title: ' . wp_json_encode( $x_label ) . ', textStyle: { color: "' . esc_js( $text_color ) . '" }, titleTextStyle: { color: "' . esc_js( $text_color ) . '" } },
		                    vAxis: { title: ' . wp_json_encode( $y_label ) . ', textStyle: { color: "' . esc_js( $text_color ) . '" }, titleTextStyle: { color: "' . esc_js( $text_color ) . '" } },
		                    trendlines: { 0: trend }
		                };
		                ' . ( $point_color !== '' ? 'o.colors = [ ' . wp_json_encode( $point_color ) . ' ];' : '' ) . '

		                chart.draw(data, o);
		            }

		            draw();
		            window.sktTrendCharts.push(draw);

		            if(!window.sktTrendResizeBound){
		                window.sktTrendResizeBound = true;
		                var t;
		                window.addEventListener("resize", function(){
		                    clearTimeout(t);
		                    t = setTimeout(function(){ window.sktTrendCharts.forEach(function(fn){ fn(); }); }, 200);
		                });
		            }
		        });
		    })();
		    </script>';
		break;

		case 'skt_bar':

			static $bar_counter = 0;
			$bar_counter++;
			$wrapCode = '';
			$chart_id = 'bar_' . $bar_counter;

			$bar_title   = isset( $bar_title ) ? sanitize_text_field( $bar_title )
			             : ( isset( $title ) ? sanitize_text_field( $title ) : '' );
			$direction   = ( isset( $direction ) && strtolower( $direction ) === 'vertical' ) ? 'vertical' : 'horizontal';
			$stacked     = ( isset( $stacked ) && in_array( strtolower( $stacked ), array( 'yes', 'true', '1' ), true ) ) ? 'true' : 'false';
			$bar_width   = ! empty( $bar_width )  ? (int) $bar_width  : 600;
			$bar_height  = ! empty( $bar_height ) ? (int) $bar_height : 400;
			$chart_area  = ! empty( $chart_area ) ? (int) $chart_area : 50;
			$category    = ! empty( $category )   ? sanitize_text_field( $category ) : 'Label';
			$haxis_title = isset( $haxis_title ) ? sanitize_text_field( $haxis_title ) : '';
			$vaxis_title = isset( $vaxis_title ) ? sanitize_text_field( $vaxis_title ) : '';
			$legend      = ! empty( $legend ) ? sanitize_text_field( $legend ) : 'right';
			$colors      = ! empty( $colors ) ? array_map( 'trim', explode( ',', $colors ) ) : array();

			$series = ! empty( $series )
			        ? array_map( 'sanitize_text_field', array_map( 'trim', explode( ',', $series ) ) )
			        : array();

			preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );

			$rows = array();
			$max_values = 0;

			foreach ( $skill_matches as $sk ) {
			    preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
			    $pairs = array();
			    foreach ( $attrs as $a ) { $pairs[ $a[1] ] = $a[2]; }

			    $label = isset( $pairs['label'] ) ? sanitize_text_field( $pairs['label'] )
			           : ( isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '' );

			    $values = array();
			    if ( isset( $pairs['values'] ) && $pairs['values'] !== '' ) {
			        foreach ( explode( ',', $pairs['values'] ) as $v ) { $values[] = (float) trim( $v ); }
			    } else {
			        if ( isset( $pairs['value'] ) ) { $values[] = (float) $pairs['value']; }
			        for ( $i = 2; $i <= 10; $i++ ) {
			            if ( isset( $pairs[ 'value' . $i ] ) && $pairs[ 'value' . $i ] !== '' ) {
			                $values[] = (float) $pairs[ 'value' . $i ];
			            }
			        }
			    }

			    if ( count( $values ) > $max_values ) { $max_values = count( $values ); }
			    $rows[] = array( 'label' => $label, 'values' => $values );
			}

			if ( empty( $rows ) || $max_values < 1 ) { return ''; }

			$header = array( $category );
			for ( $i = 0; $i < $max_values; $i++ ) {
			    $header[] = isset( $series[ $i ] ) ? $series[ $i ] : ( 'Series ' . ( $i + 1 ) );
			}

			$chartData = array( $header );
			foreach ( $rows as $r ) {
			    $vals = $r['values'];
			    while ( count( $vals ) < $max_values ) { $vals[] = 0; }
			    $chartData[] = array_merge( array( $r['label'] ), $vals );
			}

			$viz       = ( $direction === 'vertical' ) ? 'ColumnChart' : 'BarChart';
			$colors_js = ! empty( $colors ) ? 'options.colors = ' . wp_json_encode( array_values( $colors ) ) . ';' : '';

			$wrapCode .= '
			<div class="skt-bar-wrap">
			    <div id="' . esc_attr( $chart_id ) . '" style="width:' . (int) $bar_width . 'px;height:' . (int) $bar_height . 'px;margin:0 auto;max-width:100%;"></div>
			</div>
			<script>
			(function(){
			    google.charts.load("current", {packages:["corechart"]});
			    google.charts.setOnLoadCallback(function(){

			        var el = document.getElementById("' . esc_js( $chart_id ) . '");
			        if(!el){ return; }

			        var data = google.visualization.arrayToDataTable(' . wp_json_encode( $chartData ) . ');

			        var options = {
			            title: "' . esc_js( $bar_title ) . '",
			            width: ' . (int) $bar_width . ',
			            height: ' . (int) $bar_height . ',
			            isStacked: ' . $stacked . ',
			            legend: { position: "' . esc_js( $legend ) . '" },
			            chartArea: { width: "' . (int) $chart_area . '%" },
			            hAxis: { title: "' . esc_js( $haxis_title ) . '", minValue: 0 },
			            vAxis: { title: "' . esc_js( $vaxis_title ) . '" }
			        };
			        ' . $colors_js . '

			        var chart = new google.visualization.' . $viz . '(el);
			        chart.draw(data, options);
			    });
			})();
			</script>';
		break;

		case 'skt_pictorialbar':
			static $pbar_counter = 0;
			$pbar_counter++;
			$wrapCode = '';
			$chart_id = 'pbar_' . $pbar_counter;

			$raw        = ( isset( $atts ) && is_array( $atts ) ) ? $atts : array();
			$pbar_title = ! empty( $raw['chart_title'] ) ? sanitize_text_field( $raw['chart_title'] ) : '';
			$icon_shape = ! empty( $raw['icon'] ) ? strtolower( sanitize_text_field( $raw['icon'] ) ) : 'person';
			$icon_color = ! empty( $raw['icon_color'] ) ? sanitize_text_field( $raw['icon_color'] ) : '#3b82f6';
			$bar_h      = ! empty( $raw['bar_height'] ) ? (int) $raw['bar_height'] : 34;
			$max_val    = ( isset( $raw['max'] ) && $raw['max'] !== '' ) ? (float) $raw['max'] : 0;
			$show_value = ! ( isset( $raw['show_value'] ) && in_array( strtolower( $raw['show_value'] ), array( 'no', 'false', '0' ), true ) );

			preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );
			$rows = array();
			foreach ( $skill_matches as $sk ) {
			    preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
			    $pairs = array();
			    foreach ( $attrs as $a ) { $pairs[ $a[1] ] = $a[2]; }
			    $label = isset( $pairs['label'] ) ? sanitize_text_field( $pairs['label'] )
			           : ( isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '' );
			    $rows[] = array( 'label' => $label, 'value' => isset( $pairs['value'] ) ? (float) $pairs['value'] : 0 );
			}
			if ( empty( $rows ) ) { return ''; }

			// auto-max
			if ( $max_val <= 0 ) { foreach ( $rows as $r ) { if ( $r['value'] > $max_val ) { $max_val = $r['value']; } } }
			if ( $max_val <= 0 ) { $max_val = 1; }

			// --- shape markup (%C% color, %O% opacity) + tile width ---
			$c = max( 6, (int) round( $bar_h / 2 ) );
			switch ( $icon_shape ) {
			    case 'square':
			        $cw = 24;
			        $shape = '<rect x="4" y="' . ( $c - 9 ) . '" width="16" height="18" rx="3" fill="%C%" fill-opacity="%O%"/>';
			        break;
			    case 'star':
			        $cw = 26;
			        $shape = '<g transform="translate(0,' . ( $c - 15 ) . ')"><path d="M13 3l2.9 6 6.6.9-4.8 4.6 1.2 6.5L13 24.8 7.1 27.9l1.2-6.5L3.5 16.8l6.6-.9z" fill="%C%" fill-opacity="%O%"/></g>';
			        break;
			    case 'person':
			        $cw = 22;
			        $shape = '<g transform="translate(1,' . ( $c - 15 ) . ')"><circle cx="10" cy="7" r="5" fill="%C%" fill-opacity="%O%"/><path d="M2 28c0-5 3.6-9 8-9s8 4 8 9z" fill="%C%" fill-opacity="%O%"/></g>';
			        break;
			    case 'bar':
			        $cw = 22;
			        $shape = '<rect x="0" y="2" width="14" height="' . max( 1, $bar_h - 4 ) . '" rx="2" fill="%C%" fill-opacity="%O%"/>';
			        break;
			    case 'circle':
			    case 'dot':
			    
			    default:
			        $cw = 24;
			        $shape = '<circle cx="12" cy="' . $c . '" r="8" fill="%C%" fill-opacity="%O%"/>';
			        break;
			}
			$shape_fill  = str_replace( array( '%C%', '%O%' ), array( $icon_color, '1' ),    $shape );
			$shape_ghost = str_replace( array( '%C%', '%O%' ), array( $icon_color, '0.18' ), $shape );

			$person = $max_val / 25;

			$wrapCode .= '<div class="skt-pbar-wrap ' . esc_attr( $chart_id ) . '" style="width:100%;max-width:760px;margin:0 auto;font-family:inherit;">';
			if ( $pbar_title !== '' ) {
			    $wrapCode .= '<div style="font-weight:600;margin:0 0 12px;font-size:16px;">' . esc_html( $pbar_title ) . '</div>';
			}
			foreach ( $rows as $i => $r ) {
			    $pct     = max( 0, min( 100, ( $r['value'] / $max_val ) * 100 ) );
			    $val_txt = rtrim( rtrim( number_format( $r['value'], 2, '.', ',' ), '0' ), '.' );
			    $pf      = $chart_id . '_f' . $i;
			    $pg      = $chart_id . '_g' . $i;

			    $svg_bar = '<svg width="100%" height="' . (int) $bar_h . '" style="display:block;overflow:hidden;border-radius:4px;">'
			             . '<defs>'
			             . '<pattern id="' . esc_attr( $pg ) . '" width="' . (int) $cw . '" height="' . (int) $bar_h . '" patternUnits="userSpaceOnUse">' . $shape_ghost . '</pattern>'
			             . '<pattern id="' . esc_attr( $pf ) . '" width="' . (int) $cw . '" height="' . (int) $bar_h . '" patternUnits="userSpaceOnUse">' . $shape_fill . '</pattern>'
			             . '</defs>'
			             . '<rect x="0" y="0" width="100%" height="' . (int) $bar_h . '" fill="url(#' . esc_attr( $pg ) . ')"/>'
			             . '<rect x="0" y="0" width="' . $pct . '%" height="' . (int) $bar_h . '" fill="url(#' . esc_attr( $pf ) . ')"/>'
			             . '</svg>';

			    $wrapCode .= '
			    <div style="display:flex;align-items:center;gap:10px;margin:6px 0;">
			        <span style="flex:0 0 130px;text-align:right;font-size:13px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">' . esc_html( $r['label'] ) . '</span>
			        <div style="flex:1;">' . $svg_bar . '</div>';
			    if ( $show_value ) {
			        $wrapCode .= '<span style="flex:0 0 56px;font-size:13px;color:#444;">' . esc_html( $val_txt ) . '</span>';
			    }



			    $wrapCode .= '</div>';
			}
			$svg_bar = '<svg width="100%" height="' . (int) $bar_h . '" style="display:block;overflow:hidden;border-radius:4px;">'
			             . '<rect x="0" y="0" width="8%" height="' . (int) $bar_h . '" fill="url(#' . esc_attr( $pg ) . ')"/>'
			             . '<rect x="0" y="0" width="8%" height="' . (int) $bar_h . '" fill="url(#' . esc_attr( $pf ) . ')"/>'
			             . '</svg>';

			$wrapCode .= '
				<div style="font-weight:600;margin:40px 0 12px;font-size:16px;display:flex;align-items:center;gap:6px;text-align:center; justify-content: flex-end;">
				    <span>' . esc_html( $person ) . ' =</span><span>'.$svg_bar.'</span>
			</div>';

			$wrapCode .= '</div>';
		break;

		case 'skt_watercontent':
			static $wc_counter = 0;
			$wc_counter++;
			$wrapCode = '';
			$chart_id = 'wc_' . $wc_counter;

			// --- attributes (raw $atts ) ---
			$raw         = ( isset( $atts ) && is_array( $atts ) ) ? $atts : array();
			$wc_title    = ! empty( $raw['chart_title'] ) ? sanitize_text_field( $raw['chart_title'] ) : '';
			$water_color = ! empty( $raw['water_color'] ) ? sanitize_text_field( $raw['water_color'] ) : '#3aa0e0';
			$size        = ! empty( $raw['size'] )  ? (int) $raw['size']  : 130;
			$max_val     = ( isset( $raw['max'] ) && $raw['max'] !== '' ) ? (float) $raw['max'] : 100;
			$speed       = ! empty( $raw['speed'] ) ? (float) $raw['speed'] : 2.5;
			if ( $max_val <= 0 ) { $max_val = 100; }
			if ( $size < 60 ) { $size = 60; }

			// --- [skill label="" value=""] rows ---
			preg_match_all( '/\[skill\s+([^\]]+)\]/', $content, $skill_matches, PREG_SET_ORDER );
			$rows = array();
			foreach ( $skill_matches as $sk ) {
			    preg_match_all( '/(\w+)="([^"]*)"/', $sk[1], $attrs, PREG_SET_ORDER );
			    $pairs = array();
			    foreach ( $attrs as $a ) { $pairs[ $a[1] ] = $a[2]; }
			    $label = isset( $pairs['label'] ) ? sanitize_text_field( $pairs['label'] )
			           : ( isset( $pairs['title'] ) ? sanitize_text_field( $pairs['title'] ) : '' );
			    $rows[] = array( 'label' => $label, 'value' => isset( $pairs['value'] ) ? (float) $pairs['value'] : 0 );
			}
			if ( empty( $rows ) ) { return ''; }

			$kf      = $chart_id . '-move';
			$txt_sz  = max( 14, (int) round( $size / 6 ) );

			// --- scoped CSS ---
			$wrapCode .= '<style>
			.' . $chart_id . '{--s:' . (int) $size . 'px;--wc:' . esc_html( $water_color ) . ';display:flex;flex-wrap:wrap;gap:26px;justify-content:center;align-items:flex-start;font-family:inherit;}
			.' . $chart_id . ' .wc-title{flex:0 0 100%;text-align:center;font-weight:600;font-size:16px;margin-bottom:4px;color:' . esc_html( $text_color ) . ';}
			.' . $chart_id . ' .wc-item{display:flex;flex-direction:column;align-items:center;gap:10px;width:var(--s);}
			.' . $chart_id . ' .wc-ball{position:relative;width:var(--s);height:var(--s);border-radius:50%;overflow:hidden;box-sizing:border-box;background:#eaf3fb;border:5px solid var(--wc);}
			.' . $chart_id . ' .wc-fill{position:absolute;left:0;right:0;bottom:0;height:var(--p);background:var(--wc);transition:height 1.1s ease;}
			.' . $chart_id . ' .wc-wave{position:absolute;left:0;bottom:100%;width:200%;height:16px;animation:' . $kf . ' ' . $speed . 's linear infinite;}
			.' . $chart_id . ' .wc-wave svg{display:block;width:100%;height:100%;}
			.' . $chart_id . ' .wc-txt{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:' . $txt_sz . 'px;color:' . esc_html( $bar_percentcolor ) . ';text-shadow:0 1px 2px rgba(255,255,255,.55);}
			.' . $chart_id . ' .wc-label{font-size:13px;color:' . esc_html( $text_color ) . ';text-align:center;line-height:1.2;}
			@keyframes ' . $kf . '{to{transform:translateX(-50%);}}
			</style>';

			// --- HTML build ---
			$wave_svg = '<svg viewBox="0 0 240 16" preserveAspectRatio="none"><path d="M0 8 Q30 2 60 8 T120 8 T180 8 T240 8 V16 H0 Z" fill="' . esc_html( $water_color ) . '"/></svg>';

			$wrapCode .= '<div class="' . esc_attr( $chart_id ) . '">';
			if ( $wc_title !== '' ) {
			    $wrapCode .= '<div class="wc-title">' . esc_html( $wc_title ) . '</div>';
			}
			foreach ( $rows as $r ) {
			    $pct      = max( 0, min( 100, ( $r['value'] / $max_val ) * 100 ) );
			    $pct_disp = round( $pct );
			    $wrapCode .= '<div class="wc-item">'
			           . '<div class="wc-ball">'
			           . '<div class="wc-fill" style="--p:' . $pct . '%;"><div class="wc-wave">' . $wave_svg . '</div></div>'
			           . '<div class="wc-txt">' . $pct_disp . '%</div>'
			           . '</div>'
			           . '<div class="wc-label">' . esc_html( $r['label'] ) . '</div>'
			           . '</div>';
			}
			$wrapCode .= '</div>';
		break;
	}
	return $wrapCode;
}
add_shortcode( 'skillwrapper', 'sktskillbar_skillwrapper_func' );

//[skill title_background="#f7a53b" bar_foreground="#f7a53b" bar_background="#eeeeee" percent="90" title="CSS3"]
function sktskillbar_skilldata_func( $atts ) {
	extract( shortcode_atts( array(
		'title_background' => '',
		'bar_foreground' => '',
		'bar_background' => '',
		'percent' => '0',
		'title' => '',
	), $atts ) );


	if( $title_background != '' ){
		$skillHtml = '<div class="skillbar clearfix" data-percent="'.esc_attr($percent).'%" style="background: '.esc_attr($bar_background).';">
				<div class="skillbar-title" style="background: '.esc_attr($title_background).' !important;"><span>'.esc_attr($title).'</span></div>
				<div class="skillbar-bar" style="background: '.esc_attr($bar_foreground).';"></div>
				<div class="skill-bar-percent">'.esc_attr($percent).'%</div>
			</div>';
	}elseif( $title_background == '' && $bar_foreground != '' && $bar_background != '' ){
		$skillHtml = '<div class="skillbar clearfix " data-percent="'.esc_attr($percent).'%" style="background: '.esc_attr($bar_background).';">
				<div class="skillbar-title" style="background: '.esc_attr($title_background).' !important;;"><span>'.esc_attr($title).'</span></div>
				<div class="skillbar-bar" style="background: '.esc_attr($bar_foreground).';"></div>
				<div class="skill-bar-percent">'.esc_attr($percent).'%</div>
			</div>';
	}elseif( $title_background == '' && $bar_foreground == '' && $bar_background == '' ){
		$skillHtml = '<li>
				<div class="chartbox">
					<div class="chart" data-percent="'.esc_attr($percent).'">
						<span>'.esc_attr($percent).'%</span>
					</div>
					<p>'.wp_strip_all_tags(esc_attr($title)).'</p>
				</div>
			</li>';
	}

	return $skillHtml;
}
add_shortcode( 'skill', 'sktskillbar_skilldata_func' );


// create skt skillbar option page
function sbar_admin() {  
    include('sktskillbar_option.php');  
}
function sbar_admin_actions() {
	add_options_page('SKT Skill Bar', 'SKT Skill Bar', 'manage_options', 'sktskillbar_admin', 'sbar_admin');
}
add_action('admin_menu', 'sbar_admin_actions');

function sktskillbar_admin_action_links($links, $file) {
    static $tb_plugin;
    if (!$tb_plugin) {
        $tb_plugin = plugin_basename(__FILE__);
    }
    if ($file == $tb_plugin) {
        $settings_link = '<a href="options-general.php?page=sktskillbar_admin">Settings</a>';
        array_unshift($links, $settings_link);
    }
    return $links;
}
add_filter('plugin_action_links', 'sktskillbar_admin_action_links', 10, 2);

function sbar_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);
 
   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);
}

function sktskillbar_hex_to_rgb_to_rgb( $hex ) {
    $hex = str_replace( '#', '', $hex );

    if ( 3 === strlen( $hex ) ) {
        $hex = $hex[0] . $hex[0] .
               $hex[1] . $hex[1] .
               $hex[2] . $hex[2];
    }

    return sprintf(
        'rgb(%d, %d, %d)',
        hexdec( substr( $hex, 0, 2 ) ),
        hexdec( substr( $hex, 2, 2 ) ),
        hexdec( substr( $hex, 4, 2 ) )
    );
}


function sktskillbar_hex_to_rgb_to_rgb_opacity( $hex, $opacity = 0.2 ) {
    $hex = str_replace( '#', '', $hex );

    // Convert 3-digit HEX to 6-digit
    if ( 3 === strlen( $hex ) ) {
        $hex = $hex[0] . $hex[0] .
               $hex[1] . $hex[1] .
               $hex[2] . $hex[2];
    }

    $r = hexdec( substr( $hex, 0, 2 ) );
    $g = hexdec( substr( $hex, 2, 2 ) );
    $b = hexdec( substr( $hex, 4, 2 ) );

    // Keep opacity between 0 and 1
    $opacity = max( 0, min( 1, (float) $opacity ) );

    return sprintf(
        'rgba(%d, %d, %d, %s)',
        $r,
        $g,
        $b,
        $opacity
    );
}

?>