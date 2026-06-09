=== SKT Skill Bar ===
Contributors: sonalsinha21
Tags: skill bars, circular skill bar, half circle skill bar, vertical skill bar, vertical graph bar
Requires at least: 5.0
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 2.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Showcase skillsets that you are good at anywhere on your website using this plugin.

== Description ==

This plugin adds fancy jQuery skill bars. Skill bar like progress bar or circular bar or vertical bar or half circular bar showcasing your skill set in percentage is shown. Fancy animation due to jQuery.

Related Links:
* <a href="https://www.sktperfectdemo.com/demos/exceptiona/skt-skill-bar/" target="_blank" title="Demo Link for Skill Bars in Action">Demo Link for Skill Bars in Action</a> 

Also check our **[WordPress theme free](https://www.sktthemes.org/product-category/free-wordpress-themes/)** at SKT Themes which are available for any commercial or personal use. These ready to use templates are available for free download.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `sktskillbar.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Skill Bar Shortcode: [skillwrapper type="bar" bar_titlefontsize="12" bar_titlecolor="#000" bar_percentfontszie="11" bar_percentcolor="#336699"]
    [skill title_background="#f7a53b" bar_foreground="#ff9000" bar_background="#eeeeee" percent="90" title="CSS3"]
    [skill title_background="#39bcdf" bar_foreground="#6adcfa" bar_background="#eeeeee" percent="55" title="WordPress"]
    [skill title_background="#ff2727" bar_foreground="#fa6e6e" bar_background="#eeeeee" percent="85" title="PHP"]
    [skill title_background="#0d5aa6" bar_foreground="#336699" bar_background="#eeeeee" percent="100" title="jQuery"]
[/skillwrapper]

4. Skill Gage Shortcode: [skillwrapper type="gage" align="left"]
    [skill percent="75" title="WordPress" bar_foreground="#f00" bar_background="#eee"]
    [skill percent="25" title="SEO" bar_foreground="#f60" bar_background="#eee"]
    [skill percent="50" title="PHP" bar_foreground="#900" bar_background="#eee"]
[/skillwrapper]

5. Skill Circle Shortcode: [skillwrapper type="circle" track_color="#333333" chart_color="#dddddd" chart_size="200" chart_fontsize="13" chart_headingfontsize="16" align="left"]
    [skill percent="88" title="Web Research"]
    [skill percent="55" title="WordPress"]
    [skill percent="85" title="PHP"]
    [skill percent="100" title="jQuery"]
[/skillwrapper]

6. Skill Vertical Graph Shortcode: [skillwrapper type="skt_verticalgraph"]
    [skill percent="51" title="WordPress" verticalgraph_background="#6adcfa" verticalgraph_titlecolor="#000000"]
    [skill percent="70" title="JavaScript" verticalgraph_background="#fa6e6e" verticalgraph_titlecolor="#000000"]
    [skill percent="40" title="PHP" verticalgraph_background="#336699" verticalgraph_titlecolor="#000000"]
[/skillwrapper]

7. Skill Pie Graph Shortcode: [skillwrapper type="skt_piegraph"]
    [skill percent="51" title="WordPress" piegraph_background="#6adcfa"]
    [skill percent="70" title="JavaScript" piegraph_background="#fa6e6e"]
    [skill percent="40" title="PHP" piegraph_background="#336699"]
[/skillwrapper]

8. Skill Polar Graph Shortcode: [skillwrapper type="skt_polygraph"]
    [skill percent="51" title="WordPress" polygraph_background="#6adcfa"]
    [skill percent="70" title="JavaScript" polygraph_background="#fa6e6e"]
    [skill percent="40" title="PHP" polygraph_background="#336699"]
[/skillwrapper]

9. Skill Line Graph Shortcode: [skillwrapper type="skt_linegraph"]
    [skill percent="51" title="WordPress" linegraph_background="#6adcfa"]
    [skill percent="70" title="JavaScript" linegraph_background="#fa6e6e"]
    [skill percent="40" title="PHP" linegraph_background="#336699"]
[/skillwrapper]

10. Scatter Graph Shortcode: [skillwrapper type="skt_scattergraph" chart_label="Sales Report" chart_color="#c11616"]
    [skill x="10" y="20"]
    [skill x="15" y="35"]
    [skill x="40" y="60"]
    [skill x="60" y="80"]
[/skillwrapper]

11. Bubble Graph Shortcode: [skillwrapper type="skt_bubblegraph" chart_color="#fa6e6e" label="Sales Report" max_radius="45" x_label="X axis" y_label="Y axis"]
    [skill x="20" y="30" r="15"]
    [skill x="40" y="10" r="10"]
    [skill x="60" y="50" r="20"]
    [skill x="80" y="100" r="130"]
[/skillwrapper]

12. Mix Graph Shortcode: [skillwrapper type="skt_mixchart" heading_one="Sales" heading_two="Target" backgroundcolor_bar="#3f6bc2dd" bordercolor_bar="#FF6384" bordercolor_line="#36A2EB"]
    [skill title="January" value1="10" value2="50"]
    [skill title="February" value1="20" value2="50"]
    [skill title="March" value1="30" value2="50"]
    [skill title="April" value1="40" value2="50"]
[/skillwrapper]

13. Radar Graph Shortcode: [skillwrapper type="skt_radargraph" heading_one="Olympics 2024" heading_two="Olympics 2026" backgroundcolor_one="#ff7e00" bordercolor_one="#ff7e00" point_one_backgroundcolor="#ff7e00" backgroundcolor_two="#00ff00" bordercolor_two="#00ff00" point_two_backgroundcolor="#00ff00"]
    [skill title="Eating" value1="65" value2="28"]
    [skill title="Drinking" value1="59" value2="48"]
    [skill title="Sleeping" value1="90" value2="40"]
    [skill title="Designing" value1="81" value2="19"]
    [skill title="Coding" value1="56" value2="96"]
    [skill title="Cycling" value1="55" value2="27"]
    [skill title="Running" value1="40" value2="100"]
[/skillwrapper]

14. Waterfall Graph Shortcode: [skillwrapper type="skt_waterfallchart" risingcolor="#00ff00" fallingcolor="#ff0000" text_color="#00000"]
    [skill title="Mon" low="28" open="28" close="38" high="38"]
    [skill title="Tue" low="38" open="38" close="55" high="55"]
    [skill title="Wed" low="55" open="55" close="77" high="77"]
    [skill title="Thu" low="77" open="77" close="66" high="66"]
    [skill title="Fri" low="66" open="66" close="22" high="22"]
[/skillwrapper]

15. Combo Graph Shortcode: [skillwrapper type="skt_combochart" chart_title="Monthly Coffee Production by Country" haxis_title="Month" vaxis_title="Cups" columns="Bolivia|Ecuador|Madagascar|Papua New Guinea|Rwanda|Average" text_color="#ff0040"]
    [skill title="2004/05" values="165|938|522|998|450|614.6"]
    [skill title="2005/06" values="135|1120|599|1268|288|682"]
    [skill title="2006/07" values="157|1167|587|807|397|623"]
    [skill title="2007/08" values="139|1110|615|968|215|609.4"]
    [skill title="2008/09" values="136|691|629|1026|366|569.6"]
[/skillwrapper]

16. PieDiff Graph Shortcode: [skillwrapper type="skt_piediff" title_old="Old Data" title_new="New Data" combine_title="Overview" title_color="#000000"]
    [skill title="Business" old="256070" new="358293"]
    [skill title="Education" old="108034" new="101265"]
    [skill title="Social Sciences & History" old="127101" new="172780"]
    [skill title="Health" old="81863" new="129634"]
    [skill title="Psychology" old="74194" new="97216"]
[/skillwrapper]

17. CoulmnDiff Graph Shortcode: [skillwrapper type="skt_columndiff" column_color="#0000ff|#ff5722" value_label="Degrees" show_bar_diff="no" text_color='#000000']
    [skill title="Business" old="2560" new="3500"]
    [skill title="Education" old="108034" new="101265"]
    [skill title="Social Sciences & History" old="127101" new="172780"]
    [skill title="Health" old="81863" new="129634"]
    [skill title="Psychology" old="74194" new="97216"]
[/skillwrapper]

18. Stepped Area Graph Shortcode: [skillwrapper type="skt_steppedarea" series1="Rotten Tomatoes" series2="IMDB" axis_title="Accumulated Rating" steppedchart_title="Stepped Area Chart" stepped_color="#00ff40|#8000ff" text_color="#8000ff"]
    [skill title="Alfred Hitchcock (1935)" v1="8.4" v2="7.9"]
    [skill title="Ralph Thomas (1959)" v1="6.9" v2="6.5"]
    [skill title="Don Sharp (1978)" v1="6.5" v2="6.4"]
    [skill title="James Hawes (2008)" v1="4.4" v2="6.2"]
[/skillwrapper]

== Frequently Asked Questions ==

Easy to use plugin. Just install it and check under settings for SKT Skill Bar. Given are the different shortcodes for usage. Just place the shortcode in any page or post and you should be done.

== Screenshots ==

1. This is how progress skill bar will appear.
2. This is how half circular skill bar will appear.
3. This is how full circular skill bar will appear.
4. This is how vertical graph skill bar will appear.
5. This is how pie graph will appear.
6. This is how poly graph will appear.
7. This is how line graph will appear.

== License ==

This plugin is free and complimentary and is governed by GPL2 License. Kindly check our wordpress themes at: http://www.sktthemes.org/