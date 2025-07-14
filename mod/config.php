<?php
/**
 * ZnetDK, Starter Web Application for rapid & easy development
 * See official website https://mobile.znetdk.fr
 * Copyright (C) 2025 Pascal MARTINEZ (contact@znetdk.fr)
 * License GNU GPL https://www.gnu.org/licenses/gpl-3.0.html GNU GPL
 * --------------------------------------------------------------------
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 * --------------------------------------------------------------------
 * Parameters of the ZnetDK 4 Mobile User limits module
 *
 * File version: 1.0
 * Last update: 07/13/2025
 */

/**
 * Maximum user accounts allowed for the application
 * @return int Number of user accounts
 */
define('MOD_Z4M_USERLIMITS_MAX_USER_ACCOUNTS', 5);

/**
 * User accounts allowed to get full menu access
 * @return Array|NULL The login names allowed to get full menu access.
 * If NULL, no restriction is applied. If array is empty, no user can have full
 * menu access.
 */
define('MOD_Z4M_USERLIMITS_FULL_MENU_ACCESS_RESTRICTION', NULL);

/**
 * Module version number
 * @return string Version
 */
define('MOD_Z4M_USERLIMITS_VERSION_NUMBER','1.0');
/**
 * Module version date
 * @return string Date in W3C format
 */
define('MOD_Z4M_USERLIMITS_VERSION_DATE','2025-07-13');