<?php
	/*
	help desk
    */

	// Prevent loading this file directly - Busted!
	if ( ! class_exists( 'WP' ) )
	{
		header( 'Status: 403 Forbidden' );
		header( 'HTTP/1.1 403 Forbidden' );
		exit;
	}


	// *
	// start create help desk 
	// *

?>

<h3>What is campaign tracking</h3>
  <p>For more information, please visit <a href="http://support.google.com/analytics/bin/answer.py?hl=en&answer=1033863">here.</a></p>
  <table cellspacing="5" cellpadding="0" border="0" class="outline2">
    <tbody>
      <tr>
        <td width="201"><p>Campaign Source (utm_source)</p></td>
        <td width="666">Required. Use <strong>utm_source</strong> to identify a
          search
          engine, newsletter name, or other source. <br>
          <em>Example</em>: <font face="Courier New, Courier, mono">utm_source=google</font></td>
      </tr>
      <tr>
        <td><p>Campaign Medium (utm_medium)</p></td>
        <td> Required. Use <strong>utm_medium</strong> to identify a
          medium
          such as email or cost-per-
          click. <br>
          <em>Example</em>: <font face="Courier New, Courier, mono">utm_medium=cpc</font></td>
      </tr>
      <tr>
        <td><p>Campaign Term (utm_term)</p></td>
        <td> Used for paid search. Use <strong>utm_term</strong> to note the keywords for this ad. <br>
          <em>Example</em>: <font face="Courier New, Courier, mono">utm_term=running+shoes</font></td>
      </tr>
      <tr>
        <td><p>Campaign Content (utm_content)</p></td>
        <td> Used for A/B testing and
          content-targeted
          ads. Use <strong>utm_content</strong> to differentiate ads or links that point to the
          same URL. <br>
          <em>Examples</em>: <font face="Courier New, Courier, mono">utm_content=logolink</font> <em>or</em><font face="Courier New, Courier, mono"> utm_content=textlink</font></td>
      </tr>
      <tr>
        <td><p>Campaign Name (utm_campaign)</p></td>
        <td> Used for keyword analysis. Use <strong>utm_campaign </strong>to identify a specific product promotion or strategic campaign. <br>
          <em>Example</em>: <font face="Courier New, Courier, mono">utm_campaign=spring_sale</font></td>
      </tr>
    </tbody>
  </table>