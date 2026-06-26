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
        <a href="<?php echo esc_url('https://www.sktthemes.org/themes/'); ?>" title="<?php esc_html( 'SKT Wordpress Themes' );?>" target="_blank">
<img src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/browse-themes.png' )); ?>" alt="<?php esc_html('SKT Wordpress Themes', 'skt-skill-bar' );?>" /></a>
    </div>
    <?php echo "<h2 class='skt_skill_heading'>" . esc_html( 'SKT Skill Bar Shortcodes', 'skt-skill-bar' ) . "</h2>"; ?>

<div class="skt-doc-grid">
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Bar', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img src="<?php echo esc_url( plugins_url( $sktskillbar_dirPath.'/images/sample_bar.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Skill Bar', 'skt-skill-bar' ); ?>" /></div>
<code>
[skillwrapper type="bar" bar_titlefontsize="12" bar_titlecolor="#000" bar_percentfontszie="11" bar_percentcolor="#336699"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#f7a53b" bar_foreground="#ff9000" bar_background="#eeeeee" percent="90" title="CSS3"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title_background="#39bcdf" bar_foreground="#6adcfa" bar_background="#eeeeee" percent="55" title="WordPress"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Gage', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/sample_gage.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Gage', 'skt-skill-bar' );?>" /><br /></div>
        <code>
[skillwrapper type="gage" align="left"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="75" title="WordPress" bar_foreground="#f00" bar_background="#eee"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="25" title="SEO" bar_foreground="#f60" bar_background="#eee"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="50" title="PHP" bar_foreground="#900" bar_background="#eee"]
[/skillwrapper]
        </code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Circle', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/sample_circle.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Circle', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="circle" track_color="#333333" chart_color="#dddddd" chart_size="200" chart_fontsize="13" chart_headingfontsize="16" align="left"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="88" title="Web Research"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="55" title="WordPress"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="85" title="PHP"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="100" title="jQuery"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Vertical Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/ver-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Vertical Graph', 'skt-skill-bar' );?>" /></div>
<code>
[skillwrapper type="skt_verticalgraph"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" verticalgraph_background="#6adcfa"  verticalgraph_titlecolor="#000000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript" verticalgraph_background="#fa6e6e" verticalgraph_titlecolor="#000000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP" verticalgraph_background="#336699" verticalgraph_titlecolor="#000000"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Pie Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/pie-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Pie Graph', 'skt-skill-bar' );?>" /></div>
<code>
[skillwrapper type="skt_piegraph"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" piegraph_background="#6adcfa"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript" piegraph_background="#fa6e6e"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP" piegraph_background="#336699"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Polar Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/polar-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Polar Graph', 'skt-skill-bar' );?>" /></div>
<code>
[skillwrapper type="skt_polygraph"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" polygraph_background="#6adcfa"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript" polygraph_background="#fa6e6e"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP" polygraph_background="#336699"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Skill Line Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/line-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Skill Line Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_linegraph"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="51" title="WordPress" linegraph_background="#6adcfa"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="70" title="JavaScript" linegraph_background="#fa6e6e"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill percent="40" title="PHP" linegraph_background="#336699"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Scatter Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/scatter.jpg' )); ?>" alt="<?php echo esc_html( 'Scatter Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_scattergraph" chart_label="Sales Report" chart_color="#c11616"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="10" y="20"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="15" y="35"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="40" y="60"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="60" y="80"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Bubble Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/bubble-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Bubble Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_bubblegraph" chart_color="#fa6e6e" label="Sales Report" max_radius="45" x_label="X axis" y_label="Y axis"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="20" y="30" r="15"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="40" y="10" r="10"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="60" y="50" r="20"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="80" y="100" r="130"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Mix Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/mix-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Mix Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_mixchart" heading_one="Sales" heading_two="Target" backgroundcolor_bar="#3f6bc2dd" bordercolor_bar="#FF6384" bordercolor_line="#36A2EB"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="January" value1="10" value2="50"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="February" value1="20" value2="50"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="March" value1="30" value2="50"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="April" value1="40" value2="50"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Radar Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/radar-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Radar Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_radargraph" heading_one="Olympics 2024" heading_two="Olympics 2026" backgroundcolor_one="#ff7e00" bordercolor_one="#ff7e00" point_one_backgroundcolor="#ff7e00" backgroundcolor_two="#00ff00" bordercolor_two="#00ff00" point_two_backgroundcolor="#00ff00"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Eating" value1="65" value2="28"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Drinking" value1="59" value2="48"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Sleeping" value1="90" value2="40"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Designing" value1="81" value2="19"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Coding" value1="56" value2="96"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Cycling" value1="55" value2="27"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Running" value1="40" value2="100"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Waterfall Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/waterfall-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Waterfall Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_waterfallchart" risingcolor="#00ff00" fallingcolor="#ff0000" text_color="#00000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Mon" low="28" open="28" close="38" high="38"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Tue" low="38" open="38" close="55" high="55"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Wed" low="55" open="55" close="77" high="77"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Thu" low="77" open="77" close="66" high="66"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Fri" low="66" open="66" close="22" high="22"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Combo Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/combo-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Combo Graph', 'skt-skill-bar' );?>" /></div>
<code>
[skillwrapper type="skt_combochart" chart_title="Monthly Coffee Production by Country" haxis_title="Month" vaxis_title="Cups" columns="Bolivia|Ecuador|Madagascar|Papua New Guinea|Rwanda|Average" text_color="#ff0040"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2004/05" values="165|938|522|998|450|614.6"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2005/06" values="135|1120|599|1268|288|682"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2006/07" values="157|1167|587|807|397|623"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2007/08" values="139|1110|615|968|215|609.4"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="2008/09" values="136|691|629|1026|366|569.6"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'PieDiff Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/piediff-graph.jpg' )); ?>" alt="<?php echo esc_html( 'PieDiff Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_piediff" title_old="Old Data" title_new="New Data" combine_title="Overview" title_color="#000000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Business" old="256070" new="358293"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Education" old="108034" new="101265"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Social Sciences & History" old="127101" new="172780"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Health" old="81863" new="129634"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Psychology" old="74194" new="97216"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'ColumnDiff Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/columndiff-graph.jpg' )); ?>" alt="<?php echo esc_html( 'ColumnDiff Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_columndiff" column_color="#0000ff|#ff5722" value_label="Degrees" show_bar_diff="no" text_color='#000000']
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Business" old="2560" new="3500"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Education" old="108034" new="101265"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Social Sciences & History" old="127101" new="172780"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Health" old="81863" new="129634"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Psychology" old="74194" new="97216"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Stepped Area Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/steppedarea-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Stepped Area Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_steppedarea" series1="Rotten Tomatoes" series2="IMDB" axis_title="Accumulated Rating" steppedchart_title="Stepped Area Chart" stepped_color="#00ff40|#8000ff" text_color="#8000ff"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Alfred Hitchcock (1935)" v1="8.4" v2="7.9"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Ralph Thomas (1959)" v1="6.9" v2="6.5"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Don Sharp (1978)" v1="6.5" v2="6.4"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="James Hawes (2008)" v1="4.4" v2="6.2"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( '3D Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/three-d-graph.jpg' )); ?>" alt="<?php echo esc_html( '3D Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_pie3d" chart_title="My Daily Activities" text_color="#333333"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Work" value="8" backgroundcolr="#FF6D01"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Eat" value="2" backgroundcolr="#EA4335"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Commute" value="4" backgroundcolr="#FBBC05"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Watch TV" value="2" backgroundcolr="#4285F4"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Sleep" value="8" backgroundcolr="#34A853"]
[/skillwrapper]
</code>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Timeline Graph', 'skt-skill-bar' ) . "</h3>"; ?>
                <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/timeline.jpg' )); ?>" alt="<?php echo esc_html( 'Timeline Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_timeline" chart_title="Project Timeline" chart_title_color="#333333"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Planning" start="2026-01-01" end="2026-01-15"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Design" start="2026-01-16" end="2026-02-15"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Development" start="2026-02-16" end="2026-04-30"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill title="Testing" start="2026-05-01" end="2026-05-31"]
[/skillwrapper]
</code>
<span><strong>Note: Use the date format YY-MM-DD, where YY = Year, MM = Month, and DD = Day.</strong>
    </div>

    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Geo Graph', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/geograph.jpg' )); ?>" alt="<?php echo esc_html( 'Geo Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_geochart" chart_title="Country Popularity" text_color="#333333" start_range_color="#e7711c" end_range_color="#4374e0"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="Germany" value="200"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="United States" value="300"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="Brazil" value="400"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="Canada" value="500"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="France" value="600"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="Russia" value="700"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill country="India" value="400"]
[/skillwrapper]
</code>
<span><strong>Note: Please use the full country name in the shortcode parameters. For example, use "India" instead of "IN", "United States" instead of "US", and "United Kingdom" instead of "UK".</strong>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Datatable', 'skt-skill-bar' ) . "</h3>"; ?>
        <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/datatable.jpg' )); ?>" alt="<?php echo esc_html( 'Datatable', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_datatable" columns="Name|Age|Date of Birth|Mobile Number"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill values="Rahul|28|12-05-1997|9876543210"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill values="Priya|24|03-11-2001|9123456789"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill values="Aman|31|22-08-1994|9001234567"]
[/skillwrapper]
</code>
<span><strong>Note: Ensure the number of values matches the number of columns in the same order otherwise, data may render incorrectly, and by default all columns are left-aligned.</strong>
    </div>
    <div class="skt-doc-card">
        <?php echo "<h3>" . esc_html( 'Line Interval Graph', 'skt-skill-bar' ) . "</h3>"; ?>
<div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/lineinterval.jpg' )); ?>" alt="<?php echo esc_html( 'Line Interval Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_lineinterval" chart_title="Line Intervals"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="1" value="100" interval1="90" interval2="110" interval3="85" interval4="96" interval5="104" interval6="120"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="2" value="120" interval1="95" interval2="130" interval3="90" interval4="113" interval5="124" interval6="140"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="3" value="130" interval1="105" interval2="140" interval3="100" interval4="117" interval5="133" interval6="139"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="4" value="90" interval1="85" interval2="95" interval3="85" interval4="88" interval5="92" interval6="95"]
[/skillwrapper]
</code>
    </div>
    
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Area Graph', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/area-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Area Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_areachart" chart_title="Company Performance" haxis_title="Year" color_label="#ffc012"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill year="2013" sales="1000" expenses="400"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill year="2014" sales="1170" expenses="460"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill year="2015" sales="660" expenses="1120"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill year="2016" sales="1030" expenses="540"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
<?php echo "<h3>" . esc_html( 'Trendline Graph', 'skt-skill-bar' ) . "</h3>"; ?>
<div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/trendline-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Trendline Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_trendline" chart_title="Sales Trend" x_label="Month" y_label="Revenue" text_color="#333333" point_color="#9e8b90"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="1" y="120"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="2" y="150"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="3" y="180"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="4" y="220"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill x="5" y="260"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Bar Graph', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/bar-line-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Bar Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_bar" bar_title="Population of Largest U.S. Cities" category="City" series="2010 Population,2000 Population" haxis_title="Total Population" vaxis_title="City"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="New York City, NY" value="8175000" value2="8008000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Los Angeles, CA" value="3792000" value2="3694000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Chicago, IL" value="2695000" value2="2896000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Houston, TX" value="2099000" value2="1953000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Philadelphia, PA"  value="1526000" value2="1517000"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Pictorial Bar', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/pictorial-bar.jpg' )); ?>" alt="<?php echo esc_html( 'Pictorial Bar Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_pictorialbar" chart_title="Population of Largest U.S. Cities" icon_color="#fcba03" max="9000000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="New York City" value="8175000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Los Angeles" value="3792000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Chicago" value="2695000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Houston" value="2099000"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Philadelphia" value="1526000"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Water Level', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/water-level-graph.jpg' )); ?>" alt="<?php echo esc_html( 'Water Level Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_watercontent" chart_title="Water Content" text_color="#333333" bar_percentcolor="#6960e0" water_color="#b4b0eb" size="200" max="100"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Cucumber" value="30"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Watermelon" value="92"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Apple" value="84"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Banana" value="74"]
[/skillwrapper]
</code>
    <strong>Note: Enter value as percentages based on the maximum value (max="100"), not as actual counts.
    </strong>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Areastack', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/areastack.jpg' )); ?>" alt="<?php echo esc_html( 'Areastack Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_areastack" chart_title="Website Traffic Sources (Monthly)" categories="Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Organic Search" values="140,232,101,264,90,340,250"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Direct Traffic" values="120,282,111,234,220,340,310"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Social Media" values="320,132,201,334,190,130,220"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Referral Traffic" values="220,402,231,134,190,230,120"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Email Marketing" values="220,302,181,234,210,290,150"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Paid Search" values="180,250,160,220,240,300,180"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Display Ads" values="90,140,120,160,180,210,170"]
[/skillwrapper]
</code>
    <strong>Note: Ensure the number of values matches the number of columns in the same order otherwise, data may render incorrectly.
    </strong>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Mountain', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/mountain.jpg' )); ?>" alt="<?php echo esc_html( 'Mountain Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_mountain" chart_title="Nagpur to Mumbai Travel Time (Hours)" color="#e54035"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Plane" value="2"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Train" value="12"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Ship" value="30"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Car" value="16"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Bus" value="18"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Bike" value="18"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Donutpattern', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/donutpattern.jpg' )); ?>" alt="<?php echo esc_html( 'Donutpattern Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_donutpattern" chart_title="Traffic Sources" center_sub="visits"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Search" value="1048"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Direct" value="735"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Email" value="580"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Social" value="484"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Referral" value="300"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Isometric', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/isometric.jpg' )); ?>" alt="<?php echo esc_html( 'Isometric Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_isometric" chart_title="Quarterly Revenue"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Q1" value="65" color="#eb4034"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Q2" value="50" color="#F6BD16"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Q3" value="20" color="#32a852"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Q4" value="60" color="#b8e3c4"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Area Negative', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/areanegative.jpg' )); ?>" alt="<?php echo esc_html( 'Area Negative Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_areaneg" chart_title="Negative Values" categories="Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Network" values="-12,18,-8,24,-15,30,-5,22,-10,16"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Memory" values="-10,16,-5,20,-10,36-8,20,-12,13"]
[/skillwrapper]
</code>
    <strong>Note: Ensure the number of values matches the number of columns in the same order otherwise, data may render incorrectly.
    </strong>
</div>
<div class="skt-doc-card">
     <?php echo "<h3>" . esc_html( 'Pyramid', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/pyramid.jpg' )); ?>" alt="<?php echo esc_html( 'Pyramid Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_pyramid" chart_title="Urban vs Rural Population" left_label="Rural" right_label="Urban" left_color="#00B894" right_color="#6C5CE7" unit="%"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="0-9 Years" right="3.2" left="4.1"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="10-19 Years" right="4.0" left="4.6"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="20-29 Years" right="5.5" left="3.8"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="30-39 Years" right="5.1" left="3.2"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="40-49 Years" right="4.2" left="2.9"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="50-59 Years" right="3.0" left="2.4"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="60+ Years" right="2.1" left="2.0"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Reversed Bar', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/reversedbar.jpg' )); ?>" alt="<?php echo esc_html( 'Reversed Bar', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_reversedbar" chart_title="Top Categories" text_color="#333333"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Groceries" value="49" color="#42f575"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Transport" value="55" color="#00E396"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Rent" value="41" color="#FEB019"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Utilities" value="67" color="#FF4560"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Dining"value="22" color="#775DD0"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Shopping" value="43" color="#3F51B5"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Health" value="36" color="#D4526E"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Trapezoid Funnel', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/trapezoidfunnel.jpg' )); ?>" alt="<?php echo esc_html( 'Trapezoid Funnel Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_trapezoidfunnel" chart_title="Sales Funnel" title_color="#333333" text_color="#d2d2d2"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Visitors" value="4000" color="#2563eb"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Leads" value="2500" color="#7c3aed"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Qualified" value="1000" color="#db2777"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Customers" value="250" color="#ea580c"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Repeat Buyers" value="75" color="#16a34a"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Dumbbell', 'skt-skill-bar' ) . "</h3>"; ?>
<div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/dumbbell.jpg' )); ?>" alt="<?php echo esc_html( 'Dumbbell Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_dumbbell" chart_title="2022 vs 2023 by Team" label_a="2022" label_b="2023" color_a="#008FFB" color_b="#00E396"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Operations" a="42" b="58"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Sales" a="30" b="51"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Marketing" a="55" b="48"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Support"a="22" b="40"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="R&D" a="38" b="62"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Finance" a="42" b="44"]
[/skillwrapper]
</code>
</div>
<div class="skt-doc-card">
    <?php echo "<h3>" . esc_html( 'Slope', 'skt-skill-bar' ) . "</h3>"; ?>
    <div class="skt-skill-bar-images">
<img width="540" src="<?php echo esc_url(plugins_url( $sktskillbar_dirPath.'/images/slope.jpg' )); ?>" alt="<?php echo esc_html( 'Slope Graph', 'skt-skill-bar' );?>" /><br />
</div>
<code>
[skillwrapper type="skt_slope" chart_title="Market Share Change" left_label="2022" right_label="2023"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Product A" start="34" end="52" color="#008FFB"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Product B" start="28" end="24" color="#FF4560"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Product C" start="45" end="40" color="#FEB019"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Product D" start="18" end="31" color="#00E396"]
&nbsp;&nbsp;&nbsp;&nbsp;[skill label="Product E" start="22" end="20" color="#a83232"]
[/skillwrapper]
</code>
</div>
</div>
</div>