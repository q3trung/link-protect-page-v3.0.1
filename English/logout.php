﻿<?php
/* >_ Developed by Vy Nghia */
session_start();
unset($_SESSION["facebook_access_token"]);
header("Location: /");
