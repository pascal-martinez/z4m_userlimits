<?php

/*
 * ZnetDK, Starter Web Application for rapid & easy development
 * See official website https://www.znetdk.fr
 * Copyright (C) 2025 Pascal MARTINEZ (contact@znetdk.fr)
 * License GNU GPL http://www.gnu.org/licenses/gpl-3.0.html GNU GPL
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * --------------------------------------------------------------------
 * ZnetDK 4 Mobile User Limits module App Controller
 *
 * File version: 1.0
 * Last update: 07/13/2025
 */

namespace z4m_userlimits\mod\controller;

use \z4m_userlimits\mod\UserLimits;

/**
 * Overload of the ZnetDK Users controller
 */
class Users extends \AppController {

    static protected function action_save() {
        $request = new \Request();
        $response = new \Response();
        $isNewUser = $request->user_id ? FALSE : TRUE;
        if ($isNewUser && $request->user_enabled === '1' && UserLimits::isMaxUserAccountReached()) {
            // Max user accounts reached
            $response->setFailedMessage(NULL, MOD_Z4M_USERLIMITS_ERROR_MAX_USER_ACCOUNTS_REACHED);
        } elseif ($request->full_menu_access === '1'
                && !UserLimits::isFullMenuAccessAllowedForUser($request->login_name)) {
            // Full menu access forbidden
            $response->setFailedMessage(NULL, MOD_Z4M_USERLIMITS_ERROR_FULL_MENU_ACCESS_FORBIDDEN, 'full_menu_access');
        } else {
            $response = \controller\Users::doAction('save');
        }
        return $response;
    }
}
