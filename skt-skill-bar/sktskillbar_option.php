<?php
 if ( ! defined( 'ABSPATH' ) ) exit;
 ?>
<style>
table{ border-collapse:collapse; }
table td{ padding:5px; }
table td img{ max-width:100%; }
code{ font-family:"Courier New", Courier, monospace; background:none; }
</style>

<div class="wrap">
    <?php 
    $sktskillbar_dir = plugin_dir_path( __FILE__ ); 
    $sktskillbar_lpos = strrpos($sktskillbar_dir, "skt-"); 
    $sktskillbar_dirPathStr = substr($sktskillbar_dir, $sktskillbar_lpos, strlen($sktskillbar_dir) );
    $sktskillbar_dirPath = str_replace('/', '', $sktskillbar_dirPathStr);
    ?>
    <div class="sktimagetop_admin_image">
        <a href="<?php echo esc_url('https://www.sktthemes.org/themes/'); ?>" title="<?php esc_html( 'SKT Wordpress Themes' );?>" target="_blank"><img src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/browse-themes.png' )); ?>" alt="<?php esc_html('SKT Wordpress Themes', 'skt-skill-bar' );?>" /></a>
    </div>
    <?php echo "<h2>" . esc_html( 'SKT Skill Bar Options', 'skt-skill-bar' ) . "</h2>"; ?>
    <table width="100%" class="fixed">
        <tr>
            <td width="75%">
                 <?php echo "<h3>" . esc_html( 'Skill Bar', 'skt-skill-bar' ) . "</h3>"; ?>
	            <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/sample_bar.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Bar', 'skt-skill-bar'  );?>" /><br />
                <code>
                    [skillwrapper type="bar" bar_titlefontsize="12" bar_titlecolor="#000" bar_percentfontszie="11" bar_percentcolor="#336699"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#f7a53b" bar_foreground="#ff9000" bar_background="#eeeeee" percent="90" title="CSS3"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#39bcdf" bar_foreground="#6adcfa" bar_background="#eeeeee" percent="55" title="WordPress"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#ff2727" bar_foreground="#fa6e6e" bar_background="#eeeeee" percent="85" title="PHP"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#0d5aa6" bar_foreground="#336699" bar_background="#eeeeee" percent="100" title="jQuery"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Gage', 'skt-skill-bar' ) . "</h3>"; ?>
	            <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/sample_gage.jpg' )); ?>" alt="<?php echo esc_html('Skill Gage', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="gage" align="left"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="75" title="WordPress" bar_foreground="#f00" bar_background="#eee"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="25" title="SEO" bar_foreground="#f60" bar_background="#eee"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="50" title="PHP" bar_foreground="#900" bar_background="#eee"]<br />
                    [/skillwrapper]
				</code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Circle', 'skt-skill-bar' ) . "</h3>"; ?>
            	<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/sample_circle.jpg' )); ?>" alt="<?php echo esc_html('Skill Circle', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="circle" track_color="#333333" chart_color="#dddddd" chart_size="200" chart_fontsize="13" chart_headingfontsize="16" align="left"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="88" title="Web Research"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="55" title="WordPress"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="85" title="PHP"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="100" title="jQuery"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>


        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Vertical Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/ver-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Vertical Graph', 'skt-skill-bar' );?>" /><br />
                
                <code>
                    [skillwrapper type="skt_verticalgraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" verticalgraph_background="#6adcfa"  verticalgraph_titlecolor="#000000"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  verticalgraph_background="#fa6e6e" verticalgraph_titlecolor="#000000"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  verticalgraph_background="#336699" verticalgraph_titlecolor="#000000"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Pie Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/pie-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Pie Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_piegraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" piegraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  piegraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  piegraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;" /></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Polar Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/polar-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Polar Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_polygraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" polygraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  polygraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  polygraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Skill Line Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/line-graph.jpg' )); ?>" alt="<?php echo esc_html('Skill Line Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_linegraph"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" linegraph_background="#6adcfa"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript"  linegraph_background="#fa6e6e"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP"  linegraph_background="#336699"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Scatter Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/scatter.jpg' )); ?>" alt="<?php echo esc_html('Scatter Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_scattergraph" chart_label="Sales Report" chart_color="#c11616"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="10" y="20"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="15" y="35"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="40" y="60"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="60" y="80"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Bubble Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/bubble-graph.jpg' )); ?>" alt="<?php echo esc_html('Bubble Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_bubblegraph" chart_color="#fa6e6e" label="Sales Report" max_radius="45" x_label="X axis" y_label="Y axis"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="20" y="30" r="15"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="40" y="10" r="10"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="60" y="50" r="20"]<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;[skill x="80" y="100" r="130"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Mix Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/mix-graph.jpg' )); ?>" alt="<?php echo esc_html('Mix Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_mixchart" heading_one="Sales" heading_two="Target" backgroundcolor_bar="#3f6bc2dd" bordercolor_bar="#FF6384" bordercolor_line="#36A2EB"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="January" value1="10" value2="50"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="February" value1="20" value2="50"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="March" value1="30" value2="50"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="April" value1="40" value2="50"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Radar Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/radar-graph.jpg' )); ?>" alt="<?php echo esc_html('Radar Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_radargraph" heading_one="Olympics 2024" heading_two="Olympics 2026" backgroundcolor_one="#ff7e00" bordercolor_one="#ff7e00" point_one_backgroundcolor="#ff7e00" backgroundcolor_two="#00ff00" bordercolor_two="#00ff00" point_two_backgroundcolor="#00ff00"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Eating" value1="65" value2="28"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Drinking" value1="59" value2="48"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Sleeping" value1="90" value2="40"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Designing" value1="81" value2="19"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Coding" value1="56" value2="96"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Cycling" value1="55" value2="27"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Running" value1="40" value2="100"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Waterfall Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/waterfall-graph.jpg' )); ?>" alt="<?php echo esc_html('Waterfall Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_waterfallchart" risingcolor="#00ff00" fallingcolor="#ff0000" text_color="#00000"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Mon" low="28" open="28" close="38" high="38"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Tue" low="38" open="38" close="55" high="55"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Wed" low="55" open="55" close="77" high="77"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Thu" low="77" open="77" close="66" high="66"]<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;[skill title="Fri" low="66" open="66" close="22" high="22"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Combo Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/combo-graph.jpg' )); ?>" alt="<?php echo esc_html('Combo Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_combochart" chart_title="Monthly Coffee Production by Country" haxis_title="Month" vaxis_title="Cups" columns="Bolivia|Ecuador|Madagascar|Papua New Guinea|Rwanda|Average" text_color="#ff0040"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2004/05" values="165|938|522|998|450|614.6"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2005/06" values="135|1120|599|1268|288|682"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2006/07" values="157|1167|587|807|397|623"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2007/08" values="139|1110|615|968|215|609.4"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2008/09" values="136|691|629|1026|366|569.6"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'PieDiff Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/piediff-graph.jpg' )); ?>" alt="<?php echo esc_html('PieDiff Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_piediff" title_old="Old Data" title_new="New Data" combine_title="Overview" title_color="#000000"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Business" old="256070" new="358293"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Education" old="108034" new="101265"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Social Sciences & History" old="127101" new="172780"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Health" old="81863" new="129634"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Psychology" old="74194" new="97216"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>

        <tr>
            <td><hr style="border-color:#eee;"/></td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'CoulmnDiff Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/columndiff-graph.jpg' )); ?>" alt="<?php echo esc_html('CoulmnDiff Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_columndiff" column_color="#0000ff|#ff5722" value_label="Degrees" show_bar_diff="no" text_color='#000000']
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Business" old="2560" new="3500"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Education" old="108034" new="101265"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Social Sciences & History" old="127101" new="172780"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Health" old="81863" new="129634"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Psychology" old="74194" new="97216"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "<h3>" . esc_html( 'Stepped Area Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/steppedarea-graph.jpg' )); ?>" alt="<?php echo esc_html('Stepped Area Graph', 'skt-skill-bar' );?>" /><br />
                <code>
                    [skillwrapper type="skt_steppedarea" series1="Rotten Tomatoes" series2="IMDB" axis_title="Accumulated Rating" steppedchart_title="Stepped Area Chart" stepped_color="#00ff40|#8000ff" text_color="#8000ff"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Alfred Hitchcock (1935)" v1="8.4" v2="7.9"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Ralph Thomas (1959)" v1="6.9" v2="6.5"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Don Sharp (1978)" v1="6.5" v2="6.4"]
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;[skill title="James Hawes (2008)" v1="4.4" v2="6.2"]<br />
                    [/skillwrapper]
                </code>
            </td>
        </tr>        
    </table>
</div>