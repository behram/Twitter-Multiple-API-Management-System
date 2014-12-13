<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // acme_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_homepage');
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\HomeController::indexAction',  '_route' => 'acme_homepage',);
        }
        not_acme_homepage:

        // acme_homepage_connect
        if ($pathinfo === '/connect') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_homepage_connect;
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ConnectController::indexAction',  '_route' => 'acme_homepage_connect',);
        }
        not_acme_homepage_connect:

        // acme_singout
        if ($pathinfo === '/singout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_singout;
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ConnectController::singoutAction',  '_route' => 'acme_singout',);
        }
        not_acme_singout:

        if (0 === strpos($pathinfo, '/process')) {
            // acme_process
            if ($pathinfo === '/process') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_process;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ProcessController::indexAction',  '_route' => 'acme_process',);
            }
            not_acme_process:

            // acme_process_fsend
            if ($pathinfo === '/process/followerSend') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_acme_process_fsend;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ProcessController::followerSendAction',  '_route' => 'acme_process_fsend',);
            }
            not_acme_process_fsend:

        }

        if (0 === strpos($pathinfo, '/communication')) {
            // acme_homepage_communication
            if ($pathinfo === '/communication') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_homepage_communication;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\HomeController::communicationAction',  '_route' => 'acme_homepage_communication',);
            }
            not_acme_homepage_communication:

            // acme_homepage_communication_process
            if ($pathinfo === '/communication/process') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_acme_homepage_communication_process;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\HomeController::communicationProcessAction',  '_route' => 'acme_homepage_communication_process',);
            }
            not_acme_homepage_communication_process:

        }

        if (0 === strpos($pathinfo, '/panel/ticket')) {
            // acme_ticket_delete
            if ($pathinfo === '/panel/ticket/delete') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_ticket_delete;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TicketController::deleteAction',  '_route' => 'acme_ticket_delete',);
            }
            not_acme_ticket_delete:

            // acme_ticket_finish
            if ($pathinfo === '/panel/ticket/finish') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_ticket_finish;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TicketController::finishAction',  '_route' => 'acme_ticket_finish',);
            }
            not_acme_ticket_finish:

        }

        // acme_aboutus
        if ($pathinfo === '/aboutus') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_aboutus;
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\HomeController::aboutusAction',  '_route' => 'acme_aboutus',);
        }
        not_acme_aboutus:

        // acme_packet_request
        if ($pathinfo === '/packetrequest') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_acme_packet_request;
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\PacketRequestController::indexAction',  '_route' => 'acme_packet_request',);
        }
        not_acme_packet_request:

        if (0 === strpos($pathinfo, '/request')) {
            // acme_request_delete
            if ($pathinfo === '/requestDelete') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_request_delete;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::packetDeleteAction',  '_route' => 'acme_request_delete',);
            }
            not_acme_request_delete:

            // acme_request_finish
            if ($pathinfo === '/requestFinish') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_request_finish;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::packetFinishAction',  '_route' => 'acme_request_finish',);
            }
            not_acme_request_finish:

        }

        // acme_payment_success
        if ($pathinfo === '/paymentsuccess') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_payment_success;
            }

            return array (  '_controller' => 'AcmeTwitterBundle:PaymentSuccess:index',  '_route' => 'acme_payment_success',);
        }
        not_acme_payment_success:

        if (0 === strpos($pathinfo, '/take')) {
            // acme_take_follow
            if ($pathinfo === '/takefollow') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_take_follow;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FormController::takefollowAction',  '_route' => 'acme_take_follow',);
            }
            not_acme_take_follow:

            // acme_take_credit
            if ($pathinfo === '/takecredit') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_take_credit;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FormController::takecreditAction',  '_route' => 'acme_take_credit',);
            }
            not_acme_take_credit:

            // acme_take_retweet
            if ($pathinfo === '/takeretweet') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_take_retweet;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FormController::takeretweetAction',  '_route' => 'acme_take_retweet',);
            }
            not_acme_take_retweet:

            // acme_take_favorite
            if ($pathinfo === '/takefavorite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_take_favorite;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FormController::takefavoriteAction',  '_route' => 'acme_take_favorite',);
            }
            not_acme_take_favorite:

        }

        // acme_send_tweet
        if ($pathinfo === '/sendtweet') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_acme_send_tweet;
            }

            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FormController::sendtweetAction',  '_route' => 'acme_send_tweet',);
        }
        not_acme_send_tweet:

        if (0 === strpos($pathinfo, '/c')) {
            // acme_connect_detail
            if ($pathinfo === '/connect/detail') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_connect_detail;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ConnectController::detailAction',  '_route' => 'acme_connect_detail',);
            }
            not_acme_connect_detail:

            // acme_homepage_callback
            if ($pathinfo === '/callback') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_homepage_callback;
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ConnectController::callbackAction',  '_route' => 'acme_homepage_callback',);
            }
            not_acme_homepage_callback:

        }

        if (0 === strpos($pathinfo, '/panel')) {
            if (0 === strpos($pathinfo, '/panel/function')) {
                if (0 === strpos($pathinfo, '/panel/function/send')) {
                    // acme_function_sendtweet
                    if ($pathinfo === '/panel/function/sendtweet') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_acme_function_sendtweet;
                        }

                        return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::sendtweetAction',  '_route' => 'acme_function_sendtweet',);
                    }
                    not_acme_function_sendtweet:

                    if (0 === strpos($pathinfo, '/panel/function/sendf')) {
                        // acme_function_sendfollow
                        if ($pathinfo === '/panel/function/sendfollow') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_acme_function_sendfollow;
                            }

                            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::sendfollowAction',  '_route' => 'acme_function_sendfollow',);
                        }
                        not_acme_function_sendfollow:

                        // acme_function_sendfavorite
                        if ($pathinfo === '/panel/function/sendfavorite') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_acme_function_sendfavorite;
                            }

                            return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::sendfavoriteAction',  '_route' => 'acme_function_sendfavorite',);
                        }
                        not_acme_function_sendfavorite:

                    }

                }

                // acme_function_retweet
                if ($pathinfo === '/panel/function/retweet') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_function_retweet;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::retweetAction',  '_route' => 'acme_function_retweet',);
                }
                not_acme_function_retweet:

                // acme_function_cleardrops
                if ($pathinfo === '/panel/function/cleardrops') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_function_cleardrops;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::cleardropsAction',  '_route' => 'acme_function_cleardrops',);
                }
                not_acme_function_cleardrops:

                // acme_panel_update_images
                if ($pathinfo === '/panel/function/updateimages') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_update_images;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::updateImagesAction',  '_route' => 'acme_panel_update_images',);
                }
                not_acme_panel_update_images:

                // acme_function_credit
                if ($pathinfo === '/panel/function/credit') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_function_credit;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::creditAction',  '_route' => 'acme_function_credit',);
                }
                not_acme_function_credit:

                // acme_function_randomusers
                if ($pathinfo === '/panel/function/randomusers') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_function_randomusers;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\FunctionController::randomusersAction',  '_route' => 'acme_function_randomusers',);
                }
                not_acme_function_randomusers:

            }

            // acme_panel_homepage
            if (rtrim($pathinfo, '/') === '/panel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_panel_homepage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_panel_homepage');
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\DashboardController::indexAction',  '_route' => 'acme_panel_homepage',);
            }
            not_acme_panel_homepage:

            if (0 === strpos($pathinfo, '/panel/tweet')) {
                // acme_panel_tweet
                if (rtrim($pathinfo, '/') === '/panel/tweet') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tweet;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_tweet');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TweetController::indexAction',  '_route' => 'acme_panel_tweet',);
                }
                not_acme_panel_tweet:

                // acme_panel_tweet_add
                if ($pathinfo === '/panel/tweet/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_tweet_add;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TweetController::addAction',  '_route' => 'acme_panel_tweet_add',);
                }
                not_acme_panel_tweet_add:

                // acme_panel_tweet_delete
                if (0 === strpos($pathinfo, '/panel/tweet/delete') && preg_match('#^/panel/tweet/delete/(?P<tweetId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tweet_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_panel_tweet_delete')), array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TweetController::deleteAction',));
                }
                not_acme_panel_tweet_delete:

            }

            if (0 === strpos($pathinfo, '/panel/api')) {
                // acme_panel_api
                if (rtrim($pathinfo, '/') === '/panel/api') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_api;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_api');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ApiController::indexAction',  '_route' => 'acme_panel_api',);
                }
                not_acme_panel_api:

                // acme_panel_api_add
                if ($pathinfo === '/panel/api/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_api_add;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ApiController::addAction',  '_route' => 'acme_panel_api_add',);
                }
                not_acme_panel_api_add:

                // acme_panel_api_edit
                if ($pathinfo === '/panel/api/edit') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_api_edit;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ApiController::editAction',  '_route' => 'acme_panel_api_edit',);
                }
                not_acme_panel_api_edit:

                // acme_panel_api_delete
                if (0 === strpos($pathinfo, '/panel/api/delete') && preg_match('#^/panel/api/delete/(?P<apiId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_api_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_panel_api_delete')), array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ApiController::deleteAction',));
                }
                not_acme_panel_api_delete:

            }

            if (0 === strpos($pathinfo, '/panel/generalsetting')) {
                // acme_panel_generalsetting
                if (rtrim($pathinfo, '/') === '/panel/generalsetting') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_generalsetting;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_generalsetting');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\GeneralSettingController::indexAction',  '_route' => 'acme_panel_generalsetting',);
                }
                not_acme_panel_generalsetting:

                // acme_panel_setting_update
                if ($pathinfo === '/panel/generalsetting/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_setting_update;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\GeneralSettingController::updateAction',  '_route' => 'acme_panel_setting_update',);
                }
                not_acme_panel_setting_update:

            }

            if (0 === strpos($pathinfo, '/panel/packet')) {
                // acme_panel_packet
                if (rtrim($pathinfo, '/') === '/panel/packet') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_packet;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_packet');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\PacketController::indexAction',  '_route' => 'acme_panel_packet',);
                }
                not_acme_panel_packet:

                // acme_panel_packet_add
                if ($pathinfo === '/panel/packet/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_acme_panel_packet_add;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\PacketController::addAction',  '_route' => 'acme_panel_packet_add',);
                }
                not_acme_panel_packet_add:

                // acme_panel_packet_delete
                if (0 === strpos($pathinfo, '/panel/packet/delete') && preg_match('#^/panel/packet/delete/(?P<packetId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_packet_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_panel_packet_delete')), array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\PacketController::deleteAction',));
                }
                not_acme_panel_packet_delete:

            }

            // acme_panel_system
            if (rtrim($pathinfo, '/') === '/panel/system') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_panel_system;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_panel_system');
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\SystemController::indexAction',  '_route' => 'acme_panel_system',);
            }
            not_acme_panel_system:

            // acme_panel_ticket
            if (rtrim($pathinfo, '/') === '/panel/ticket') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_panel_ticket;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_panel_ticket');
                }

                return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\TicketController::indexAction',  '_route' => 'acme_panel_ticket',);
            }
            not_acme_panel_ticket:

            if (0 === strpos($pathinfo, '/panel/users')) {
                // acme_panel_users
                if (rtrim($pathinfo, '/') === '/panel/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_users;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_users');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\UsersController::indexAction',  '_route' => 'acme_panel_users',);
                }
                not_acme_panel_users:

                // acme_panel_user_delete
                if (0 === strpos($pathinfo, '/panel/users/delete') && preg_match('#^/panel/users/delete/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_panel_user_delete')), array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\UsersController::deleteAction',));
                }
                not_acme_panel_user_delete:

            }

            if (0 === strpos($pathinfo, '/panel/log')) {
                if (0 === strpos($pathinfo, '/panel/login')) {
                    // acme_panel_login
                    if (rtrim($pathinfo, '/') === '/panel/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_acme_panel_login;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'acme_panel_login');
                        }

                        return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\LoginController::indexAction',  '_route' => 'acme_panel_login',);
                    }
                    not_acme_panel_login:

                    // acme_panel_login_control
                    if ($pathinfo === '/panel/login/control') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_acme_panel_login_control;
                        }

                        return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\LoginController::controlAction',  '_route' => 'acme_panel_login_control',);
                    }
                    not_acme_panel_login_control:

                }

                // acme_panel_logout
                if ($pathinfo === '/panel/logout') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_logout;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\LoginController::logoutAction',  '_route' => 'acme_panel_logout',);
                }
                not_acme_panel_logout:

            }

            if (0 === strpos($pathinfo, '/panel/tool')) {
                // acme_panel_tool_dofavorite
                if (rtrim($pathinfo, '/') === '/panel/tool/dofavorate') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_dofavorite;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_panel_tool_dofavorite');
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::doFavorateAction',  '_route' => 'acme_panel_tool_dofavorite',);
                }
                not_acme_panel_tool_dofavorite:

                // acme_panel_tool_sendfollower
                if ($pathinfo === '/panel/tool/sendfollower') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_sendfollower;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::sendFollowerAction',  '_route' => 'acme_panel_tool_sendfollower',);
                }
                not_acme_panel_tool_sendfollower:

                // acme_panel_tool_doretweet
                if ($pathinfo === '/panel/tool/doretweet') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_doretweet;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::doRetweetAction',  '_route' => 'acme_panel_tool_doretweet',);
                }
                not_acme_panel_tool_doretweet:

                // acme_panel_tool_sendtweet
                if ($pathinfo === '/panel/tool/sendtweet') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_sendtweet;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::sendTweetAction',  '_route' => 'acme_panel_tool_sendtweet',);
                }
                not_acme_panel_tool_sendtweet:

                // acme_panel_tool_dropclear
                if ($pathinfo === '/panel/tool/dropclear') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_dropclear;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::dropClearAction',  '_route' => 'acme_panel_tool_dropclear',);
                }
                not_acme_panel_tool_dropclear:

                // acme_panel_tool_updateimages
                if ($pathinfo === '/panel/tool/updateimages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acme_panel_tool_updateimages;
                    }

                    return array (  '_controller' => 'Acme\\TwitterBundle\\Controller\\ToolController::updateimagesAction',  '_route' => 'acme_panel_tool_updateimages',);
                }
                not_acme_panel_tool_updateimages:

            }

            // acme_panel_mail
            if (rtrim($pathinfo, '/') === '/panel/mail') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_acme_panel_mail;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_panel_mail');
                }

                return array (  '_controller' => 'AcmeTwitterBundle:Mail:index',  '_route' => 'acme_panel_mail',);
            }
            not_acme_panel_mail:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
