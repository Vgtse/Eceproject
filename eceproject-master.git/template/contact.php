<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title></title>

    <link rel="shortcut icon"
          media="screen,print"
          href="Images/favicon.ico" />

    <link type="text/css"
          rel="Stylesheet"
          media="screen,print"
          href="CSS/GGGustafson.css" />

  </head>

  <body onload="add_header('Images/SiteLogo.png',
                           'Default.html',
                           'Journeys',
                           'Contact Me Placeholder');
                add_footer('Images/ValidXHTML10.png');">

    <div id="header">
    </div>

    <table class="content"
           cellpadding="0"
           cellspacing="0">
      <tr>

        <td class="left_column left_content">

        </td>

        <td class="center_column center_content">
          <form method="post"
                action="ContactMeSuccessful.aspx"
                style="width:100%; " >
            <input name="id"
                   type="hidden"
                   value="ContactMe" />
            <input name="referrer"
                   type="hidden"
                   value="GGGustafsonWebsite" />
            <table cellpadding="5px"
                   border="0"
                   style="font-size: 13px;
                          font-family: Tahoma, Verdana;">
              <tr>
                <td align="right">
                  Your Name :
                </td>
                <td>
                  <input name="sender_name"
                         type="text"
                         style="width: 200px;" />
                </td>
              </tr>

              <tr><td colspan="2"></td></tr>

              <tr>
                <td align="right">
                  Your Email :
                </td>
                <td>
                  <input name="sender_email"
                         type="text"
                         style="width: 200px;" />
                </td>
              </tr>

              <tr><td colspan="2"></td></tr>

              <tr>
                <td align="right">
                  Subject :
                </td>
                <td>
                <input name="subject"
                       type="text"
                       style="width: 200px;" />
                </td>
              </tr>
              <tr><td></td></tr>
              <tr>
                <td align="right"
                    valign="top">
                  Message :
                </td>
                <td>
                  <textarea rows="10"
                            cols="50"
                            name="message"
                            style="font-size: 13px;
                                   padding: 3px;
                                   font-family: Tahoma, Verdana;">
                  </textarea>
                </td>
              </tr>

              <tr><td colspan="2"></td></tr>

              <tr align="center" >
                <td colspan="2">
                  <input type="submit"
                         value="Send"
                         style="width: 75px;
                                background-color:#B0C4DE;" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="reset"
                         value="Reset"
                         style="width: 75px;
                                background-color:#B0C4DE;" />
                </td >
              </tr >

            </table>
          </form>
        </td>

        <td class="right_column right_content"></td>

      </tr>
    </table>

    <div id="footer">
    </div>
  </body>
</html>
