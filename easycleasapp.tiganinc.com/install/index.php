<?php
goto s1AWO;
Hkdkt:
$step = isset($_GET["\163\164\145\160"]) ? $_GET["\163\x74\145\160"] : '';
goto FhjOm;
y_nlh: ?>
<!doctypehtml>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Quick_Service- Installer</title>
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <style type="text/css">
        body,
        html {
            background: #f7f7f7
        }
        </style>
    </head>

    <body><?php goto bhRQR;
            teHBA:
            $api = new LicenseBoxAPI();
            goto y_nlh;
            yFVFd:
            switch ($step) {
                default: ?>
        <div class="is-fullwidth tabs">
            <ul>
                <li class="is-active"><a><span><b>Requirements</b></span></a></li>
                <li><a><span>Verify</span></a></li>
                <li><a><span>Database</span></a></li>
                <li><a><span>Finish</span></a></li>
            </ul>
        </div><?php if (phpversion() < "\65\56\x34") {
                            $errors = TRUE;
                            echo "\x3c\x64\151\166\40\x63\x6c\141\x73\163\75\47\x6e\157\x74\x69\146\x69\x63\x61\x74\151\x6f\x6e\x20\x69\x73\55\x64\x61\156\147\x65\x72\47\40\x73\x74\171\x6c\145\75\47\x70\141\144\144\x69\156\147\72\61\x32\x70\170\73\x27\x3e\74\x69\40\143\x6c\141\163\x73\75\x27\x66\x61\40\x66\141\55\x74\x69\155\x65\x73\x27\76\74\57\151\76\x20\x43\x75\x72\x72\x65\156\x74\x20\120\x48\x50\40\x76\145\x72\x73\151\157\156\40\x69\163\40" . phpversion() . "\41\x20\155\x69\156\x69\155\x75\x6d\x20\x50\x48\120\x20\65\x2e\64\40\157\x72\x20\150\x69\x67\x68\x65\x72\x20\162\145\x71\x75\x69\162\145\144\x2e\74\x2f\144\x69\x76\x3e";
                        } else {
                            echo "\x3c\x64\x69\x76\40\x63\154\x61\x73\x73\75\x27\x6e\157\164\151\146\151\143\x61\x74\x69\x6f\156\x20\x69\x73\55\x73\x75\143\x63\x65\163\x73\47\40\x73\x74\171\x6c\x65\x3d\47\160\x61\x64\x64\151\156\147\72\61\x32\160\x78\x3b\47\76\x3c\x69\40\143\x6c\x61\163\x73\x3d\x27\146\141\40\x66\x61\x2d\143\x68\145\x63\x6b\x27\76\74\57\151\76\x20\131\x6f\165\40\x61\162\145\x20\x72\x75\156\156\151\156\x67\x20\x50\110\120\40\166\145\162\x73\x69\x6f\156\40" . phpversion() . "\x3c\x2f\144\151\x76\x3e";
                        }
                        if (!extension_loaded("\155\171\163\x71\154\x69")) {
                            $errors = TRUE;
                            echo "\74\x64\x69\166\40\x63\154\141\163\x73\75\x27\x6e\x6f\164\x69\x66\151\143\x61\x74\151\x6f\x6e\40\151\x73\55\x64\141\x6e\x67\x65\x72\x27\x20\x73\164\x79\x6c\x65\75\x27\160\x61\144\144\151\x6e\x67\72\x31\62\x70\170\x3b\x27\x3e\x3c\151\40\x63\154\x61\163\x73\75\47\x66\x61\40\x66\x61\55\x74\x69\x6d\145\x73\47\76\74\57\151\x3e\x20\x4d\x79\123\x51\114\151\40\120\110\x50\40\145\170\164\x65\x6e\163\151\x6f\156\x20\x6d\151\x73\163\x69\x6e\x67\x21\x3c\x2f\x64\151\x76\76";
                        } else {
                            echo "\74\144\x69\166\x20\143\154\141\x73\163\75\x27\156\x6f\x74\x69\146\x69\143\x61\164\x69\157\x6e\x20\151\x73\55\x73\165\x63\143\x65\x73\163\x27\40\163\164\171\154\145\x3d\x27\x70\x61\144\144\151\156\147\x3a\61\62\x70\170\73\47\x3e\x3c\151\x20\143\x6c\141\x73\x73\75\x27\x66\x61\x20\146\x61\x2d\143\x68\x65\x63\x6b\x27\x3e\x3c\57\x69\x3e\40\115\x79\x53\x51\114\151\x20\120\x48\x50\40\x65\170\164\x65\156\163\x69\x6f\156\40\x61\x76\x61\x69\154\141\x62\154\x65\74\57\144\x69\166\x3e";
                        } ?>
        <div style="text-align:right"><?php if ($errors == TRUE) { ?>
            <a href="#" class="button is-link" disabled>Next</a><?php  } else { ?>
            <a href="index.php?step=0" class="button is-link gen-env">Next</a><?php  } ?>
        </div><?php break;
                    case "\x30": ?>
        <div class="is-fullwidth tabs">
            <ul>
                <li><a><span><i class="fa fa-check-circle"></i> Requirement</span></a></li>
                <li class="is-active"><a><span><b>Verify</b></span></a></li>
                <li><a><span>Database</span></a></li>
                <li><a><span>Finish</span></a></li>
            </ul>
        </div><?php $license_code = null;
                        $client_name = null;
                        if (!empty($_POST["\x6c\151\143\x65\x6e\x73\145"]) && !empty($_POST["\143\x6c\151\145\x6e\164"])) {
                            $license_code = $_POST["\154\151\x63\145\156\163\x65"];
                            $client_name = $_POST["\143\154\151\x65\156\164"];
                            $activate_response = $api->activate_license($_POST["\x6c\x69\143\145\156\163\145"], $_POST["\143\x6c\x69\x65\156\164"]);
                            if (empty($activate_response)) {
                                $msg = "\123\x65\162\166\x65\162\x20\x75\156\x61\x76\141\151\x6c\141\142\x6c\x65\56";
                            } else {
                                $msg = $activate_response["\155\145\x73\x73\141\147\145"];
                            }
                            if ($activate_response["\x73\x74\x61\x74\165\163"] != "\x74\162\165\145") { ?>
        <form action="index.php?step=0" method="POST">
            <div class="notification is-danger"><?php echo ucfirst($msg); ?>
            </div>
            <div class="field"><label class="label">License code</label>
                <div class="control"><input name="license" class="input" placeholder="enter your purchase/license code"
                        required></div>
            </div>
            <div class="field"><label class="label">Your name</label>
                <div class="control"><input name="client" class="input" placeholder="enter your name/envato username"
                        required></div>
            </div>
            <div style="text-align:right"><button class="button is-link" type="submit">Verify</button></div>
        </form><?php  } else { ?>
        <form action="index.php?step=1" method="POST">
            <div class="notification is-success"><?php echo ucfirst($msg); ?>
            </div><input name="lcscs" id="lcscs" type="hidden" value="<?php echo ucfirst($activate_response["\x73\164\141\x74\x75\x73"]); ?>
">
            <div style="text-align:right"><button class="button is-link" type="submit">Next</button></div>
        </form><?php  }
                        } else { ?>
        <form action="index.php?step=0" method="POST">
            <div class="field"><label class="label">License codes</label>
                <div class="control"><input name="license" class="input" placeholder="enter your purchase/license code"
                        required></div>
            </div>
            <div class="field"><label class="label">Your name</label>
                <div class="control"><input name="client" class="input" placeholder="enter your name/envato username"
                        required></div>
            </div>
            <div style="text-align:right"><button class="button is-link" type="submit">Verify</button></div>
        </form><?php  }
                        break;
                    case "\61": ?>
        <div class="is-fullwidth tabs">
            <ul>
                <li><a><span><i class="fa fa-check-circle"></i> Requirements</span></a></li>
                <li><a><span><i class="fa fa-check-circle"></i> Verify</span></a></li>
                <li class="is-active"><a><span><b>Database</b></span></a></li>
                <li><a><span>Finish</span></a></li>
            </ul>
        </div><?php if ($_POST && isset($_POST["\154\x63\x73\143\x73"])) {
                            $valid = $_POST["\x6c\143\163\143\x73"];
                            $db_host = strip_tags(trim($_POST["\x68\157\163\x74"]));
                            $db_user = strip_tags(trim($_POST["\165\163\x65\x72"]));
                            $db_pass = strip_tags(trim($_POST["\x70\x61\x73\x73"]));
                            $db_name = strip_tags(trim($_POST["\156\141\x6d\x65"]));
                            if (!empty($db_host)) {
                                $myfile = fopen("\x2e\56\x2f\163\157\x75\x72\x63\x65\57\56\x65\156\x76", "\167") or die("\125\x6e\x61\142\x6c\x65\40\164\x6f\x20\x6f\160\145\156\40\x66\x69\154\x65\x21");
                                $txt = '';
                                fwrite($myfile, $txt);
                                $txt = "\101\120\120\x5f\116\101\x4d\105\75\114\141\x72\x61\x76\x65\x6c\12\x41\120\120\137\105\116\x56\75\x6c\157\143\141\154\xa\x41\120\x50\137\x4b\105\131\x3d\142\x61\163\145\x36\64\72\62\155\x6b\x2f\x73\x62\57\131\x61\166\x39\112\153\146\115\x56\x31\x4a\172\x38\x47\130\x65\147\152\x77\116\130\162\x59\x63\65\x37\x32\115\152\x54\153\x6b\x69\x39\126\121\75\12\101\x50\x50\x5f\104\105\x42\125\107\75\164\x72\x75\x65\xa\101\x50\x50\137\x4c\117\107\137\114\105\126\x45\114\75\x64\145\x62\165\x67\12\x41\120\120\x5f\x55\122\114\75\x68\x74\x74\160\72\57\x2f\154\157\143\x61\154\150\157\x73\x74\xa\xa\104\102\137\103\117\116\x4e\x45\x43\124\x49\x4f\116\x3d\155\171\x73\161\154\12\x44\102\x5f\x48\117\123\124\75\61\62\67\56\60\56\60\56\61\xa\x44\102\x5f\x50\117\x52\124\x3d\63\x33\x30\66\xa\104\102\137\x44\x41\x54\101\102\101\123\x45\x3d" . $db_name . "\xa\x44\x42\137\125\x53\105\x52\116\x41\x4d\105\x3d" . $db_user . "\xa\104\102\x5f\120\x41\x53\123\x57\x4f\122\x44\x3d" . $db_pass . "\xa\xa\x42\x52\117\101\104\x43\x41\123\124\137\104\x52\x49\x56\x45\122\x3d\x6c\157\x67\12\x43\x41\x43\110\105\137\x44\122\111\126\105\x52\75\146\151\154\x65\xa\123\x45\x53\x53\111\x4f\x4e\137\104\122\111\x56\105\x52\x3d\146\151\154\145\12\x51\x55\x45\125\x45\x5f\x44\122\x49\x56\x45\x52\75\163\171\156\143\xa\12\122\105\x44\111\123\137\x48\x4f\x53\124\x3d\61\62\67\56\60\x2e\60\x2e\x31\12\x52\x45\104\x49\x53\137\x50\x41\x53\x53\x57\x4f\122\x44\x3d\x6e\x75\x6c\x6c\xa\122\x45\104\x49\123\x5f\120\x4f\122\x54\75\66\63\67\x39\12\12\x4d\101\x49\x4c\x5f\104\x52\111\126\x45\x52\x3d\163\155\x74\x70\xa\x4d\101\x49\114\137\110\117\123\124\75\163\x6d\164\160\x2e\155\141\x69\154\x74\x72\x61\160\56\151\157\xa\x4d\x41\x49\114\x5f\120\x4f\x52\124\x3d\62\x35\x32\x35\xa\x4d\101\x49\x4c\x5f\x55\x53\105\122\116\x41\115\x45\75\156\165\154\x6c\12\115\x41\111\x4c\137\x50\x41\x53\x53\x57\x4f\x52\104\x3d\x6e\x75\154\x6c\12\115\101\x49\x4c\x5f\105\x4e\x43\x52\131\x50\x54\111\x4f\x4e\75\156\x75\154\x6c\xa\12\x50\x55\x53\110\105\122\137\x41\x50\120\137\111\104\75\12\x50\x55\123\110\105\x52\137\x41\x50\120\137\113\x45\x59\75\12\x50\x55\123\110\105\122\137\x41\120\120\137\x53\105\103\x52\105\x54\x3d";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                                $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                                if (mysqli_connect_errno()) { ?>
        <form action="index.php?step=1" method="POST">
            <div class="notification is-danger">Failed to connect to MySQL:<?php echo mysqli_connect_error(); ?>
            </div><input name="lcscs" id="lcscs" type="hidden" value="<?php echo $valid; ?>
">
            <div class="field"><label class="label">Database Host</label>
                <div class="control"><input name="host" class="input" placeholder="enter your database host" required
                        id="host"></div>
            </div>
            <div class="field"><label class="label">Database Username</label>
                <div class="control"><input name="user" class="input" placeholder="enter your database username"
                        required id="user"></div>
            </div>
            <div class="field"><label class="label">Database Password</label>
                <div class="control"><input name="pass" class="input" placeholder="enter your database password"
                        id="pass"></div>
            </div>
            <div class="field"><label class="label">Database Name</label>
                <div class="control"><input name="name" class="input" placeholder="enter your database name" required
                        id="name"></div>
            </div>
            <div style="text-align:right"><button class="button is-link" type="submit">Import</button></div>
        </form><?php die;
                                }
                                $templine = '';
                                $filename = "\150\x74\164\160\x73\x3a\57\x2f\x64\x6f\x63\56\163\150\141\x72\160\x64\x65\166\56\151\x6e\x2f\121\165\x69\x63\x6b\x5f\123\x65\162\166\x69\x63\x65\137\154\x61\x75\156\143\x68\137\x66\x69\x6c\x65\57\150\x64\x68\x73\141\x6a\x6b\x66\144\153\x6a\150\x2e\x64\x65\x66\x61\165\x6c\164";
                                $lines = file($filename);
                                foreach ($lines as $line) {
                                    if (substr($line, 0, 2) == "\x2d\55" || $line == '') {
                                        continue;
                                    }
                                    $templine .= $line;
                                    $query = false;
                                    if (substr(trim($line), -1, 1) == "\73") {
                                        $query = mysqli_query($con, $templine);
                                        $templine = '';
                                    }
                                } ?>
        <form action="index.php?step=2" method="POST">
            <div class="notification is-success">Database was successfully imported.</div><input name="dbscs" id="dbscs"
                type="hidden" value="true">
            <div style="text-align:right"><button class="button is-link" type="submit">Next</button></div>
        </form><?php  } else { ?>
        <form action="index.php?step=1" method="POST"><input name="lcscs" id="lcscs" type="hidden" value="<?php echo $valid; ?>
">
            <div class="field"><label class="label">Database Host</label>
                <div class="control"><input name="host" class="input" placeholder="enter your database host" required
                        id="host"></div>
            </div>
            <div class="field"><label class="label">Database Username</label>
                <div class="control"><input name="user" class="input" placeholder="enter your database username"
                        required id="user"></div>
            </div>
            <div class="field"><label class="label">Database Password</label>
                <div class="control"><input name="pass" class="input" placeholder="enter your database password"
                        id="pass"></div>
            </div>
            <div class="field"><label class="label">Database Name</label>
                <div class="control"><input name="name" class="input" placeholder="enter your database name" required
                        id="name"></div>
            </div>
            <div style="text-align:right"><button class="button is-link" type="submit">Import</button></div>
        </form><?php  }
                        } else { ?>
        <div class="notification is-danger">Sorry, something went wrong.</div><?php  }
                                                                                        break;
                                                                                    case "\x32": ?>
        <div class="is-fullwidth tabs">
            <ul>
                <li><a><span><i class="fa fa-check-circle"></i> Requirements</span></a></li>
                <li><a><span><i class="fa fa-check-circle"></i> Verify</span></a></li>
                <li><a><span><i class="fa fa-check-circle"></i> Database</span></a></li>
                <li class="is-active"><a><span><b>Finish</b></span></a></li>
            </ul>
        </div>
        <?php if ($_POST && isset($_POST["\144\x62\x73\143\x73"])) {
                                                                                            $valid = $_POST["\x64\x62\x73\143\163"]; ?>
        <center>
            <p><strong>Application is successfully installed.</strong></p><br>
            <p><strong><?php $config["\142\141\x73\x65\x5f\165\162\154"] = isset($_SERVER["\110\x54\124\120\123"]) && $_SERVER["\x48\124\x54\x50\x53"] == "\x6f\x6e" ? "\x68\x74\x74\160\163" : "\x68\x74\x74\x70";
                                                                                            $config["\x62\141\163\x65\137\x75\x72\x6c"] .= "\72\x2f\x2f" . $_SERVER["\x48\x54\x54\x50\137\110\x4f\123\x54"];
                                                                                            $config["\x62\141\x73\x65\x5f\165\x72\x6c"] .= str_replace(basename($_SERVER["\x53\x43\122\x49\120\x54\137\116\101\x4d\x45"]), '', $_SERVER["\123\103\x52\x49\120\124\x5f\x4e\101\115\105"]);
                                                                                            $base = $config["\x62\x61\x73\145\x5f\x75\x72\x6c"]; ?>
                    <a href="<?php echo str_replace("\151\156\163\164\x61\154\x6c\x2f", '', $base); ?>
">Click Here to go</a></strong></p><br>
        </center><?php  } else { ?>
        <div class="notification is-danger">Sorry, something went wrong.</div><?php  }
                                                                                        break;
                                                                                }
                                                                                goto vkv79;
                                                                                bhRQR:
                                                                                $errors = FALSE;
                                                                                goto Hkdkt;
                                                                                s1AWO:
                                                                                require_once "\56\56\x2f\x69\x6e\143\154\165\144\145\x73\57\154\142\137\x68\x65\154\160\x65\x72\x2e\160\x68\160";
                                                                                goto teHBA;
                                                                                FhjOm: ?>
        <div class="container main_body">
            <div class="section">
                <div class="column is-6 is-offset-3">
                    <center>
                        <h1 class="title" style="padding-top:20px">quickservice Installer</h1><br>
                    </center>
                    <div class="box"><?php goto yFVFd;
                                        vkv79: ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content has-text-centered"><br></div>
    </body>

    </html>