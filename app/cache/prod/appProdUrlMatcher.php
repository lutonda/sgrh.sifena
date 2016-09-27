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

        if (0 === strpos($pathinfo, '/tipocontrato')) {
            // tipocontrato
            if (rtrim($pathinfo, '/') === '/tipocontrato') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipocontrato');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::indexAction',  '_route' => 'tipocontrato',);
            }

            // tipocontrato_show
            if (preg_match('#^/tipocontrato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontrato_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::showAction',));
            }

            // tipocontrato_new
            if ($pathinfo === '/tipocontrato/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::newAction',  '_route' => 'tipocontrato_new',);
            }

            // tipocontrato_create
            if ($pathinfo === '/tipocontrato/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipocontrato_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::createAction',  '_route' => 'tipocontrato_create',);
            }
            not_tipocontrato_create:

            // tipocontrato_edit
            if (preg_match('#^/tipocontrato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontrato_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::editAction',));
            }

            // tipocontrato_update
            if (preg_match('#^/tipocontrato/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipocontrato_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontrato_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::updateAction',));
            }
            not_tipocontrato_update:

            // tipocontrato_delete
            if (preg_match('#^/tipocontrato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipocontrato_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontrato_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TipoContratoController::deleteAction',));
            }
            not_tipocontrato_delete:

        }

        if (0 === strpos($pathinfo, '/contrato')) {
            // contrato
            if (rtrim($pathinfo, '/') === '/contrato') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contrato');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::indexAction',  '_route' => 'contrato',);
            }

            // contrato_show
            if (preg_match('#^/contrato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrato_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::showAction',));
            }

            // contrato_new
            if ($pathinfo === '/contrato/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::newAction',  '_route' => 'contrato_new',);
            }

            // contrato_create
            if ($pathinfo === '/contrato/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contrato_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::createAction',  '_route' => 'contrato_create',);
            }
            not_contrato_create:

            // contrato_edit
            if (preg_match('#^/contrato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrato_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::editAction',));
            }

            // contrato_update
            if (preg_match('#^/contrato/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contrato_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrato_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::updateAction',));
            }
            not_contrato_update:

            // contrato_delete
            if (preg_match('#^/contrato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_contrato_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrato_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ContratoController::deleteAction',));
            }
            not_contrato_delete:

        }

        if (0 === strpos($pathinfo, '/departamento')) {
            // departamento
            if (rtrim($pathinfo, '/') === '/departamento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departamento');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
            }

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::showAction',));
            }

            // departamento_new
            if ($pathinfo === '/departamento/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
            }

            // departamento_create
            if ($pathinfo === '/departamento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_departamento_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::createAction',  '_route' => 'departamento_create',);
            }
            not_departamento_create:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::editAction',));
            }

            // departamento_update
            if (preg_match('#^/departamento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_departamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::updateAction',));
            }
            not_departamento_update:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_departamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\DepartamentoController::deleteAction',));
            }
            not_departamento_delete:

        }

        if (0 === strpos($pathinfo, '/instituicaobancaria')) {
            // instituicaobancaria
            if (rtrim($pathinfo, '/') === '/instituicaobancaria') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'instituicaobancaria');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::indexAction',  '_route' => 'instituicaobancaria',);
            }

            // instituicaobancaria_show
            if (preg_match('#^/instituicaobancaria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instituicaobancaria_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::showAction',));
            }

            // instituicaobancaria_new
            if ($pathinfo === '/instituicaobancaria/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::newAction',  '_route' => 'instituicaobancaria_new',);
            }

            // instituicaobancaria_create
            if ($pathinfo === '/instituicaobancaria/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_instituicaobancaria_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::createAction',  '_route' => 'instituicaobancaria_create',);
            }
            not_instituicaobancaria_create:

            // instituicaobancaria_edit
            if (preg_match('#^/instituicaobancaria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instituicaobancaria_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::editAction',));
            }

            // instituicaobancaria_update
            if (preg_match('#^/instituicaobancaria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_instituicaobancaria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instituicaobancaria_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::updateAction',));
            }
            not_instituicaobancaria_update:

            // instituicaobancaria_delete
            if (preg_match('#^/instituicaobancaria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_instituicaobancaria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instituicaobancaria_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\InstituicaoBancariaController::deleteAction',));
            }
            not_instituicaobancaria_delete:

        }

        if (0 === strpos($pathinfo, '/trabalhador')) {
            // trabalhador
            if (rtrim($pathinfo, '/') === '/trabalhador') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'trabalhador');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::indexAction',  '_route' => 'trabalhador',);
            }

            // trabalhador_show
            if (preg_match('#^/trabalhador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabalhador_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::showAction',));
            }

            // trabalhador_new
            if ($pathinfo === '/trabalhador/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::newAction',  '_route' => 'trabalhador_new',);
            }

            // trabalhador_create
            if ($pathinfo === '/trabalhador/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_trabalhador_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::createAction',  '_route' => 'trabalhador_create',);
            }
            not_trabalhador_create:

            // trabalhador_edit
            if (preg_match('#^/trabalhador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabalhador_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::editAction',));
            }

            // trabalhador_update
            if (preg_match('#^/trabalhador/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_trabalhador_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabalhador_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::updateAction',));
            }
            not_trabalhador_update:

            // trabalhador_delete
            if (preg_match('#^/trabalhador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_trabalhador_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabalhador_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\TrabalhadorController::deleteAction',));
            }
            not_trabalhador_delete:

        }

        if (0 === strpos($pathinfo, '/nacionalidade')) {
            // nacionalidade
            if (rtrim($pathinfo, '/') === '/nacionalidade') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nacionalidade');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::indexAction',  '_route' => 'nacionalidade',);
            }

            // nacionalidade_show
            if (preg_match('#^/nacionalidade/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nacionalidade_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::showAction',));
            }

            // nacionalidade_new
            if ($pathinfo === '/nacionalidade/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::newAction',  '_route' => 'nacionalidade_new',);
            }

            // nacionalidade_create
            if ($pathinfo === '/nacionalidade/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nacionalidade_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::createAction',  '_route' => 'nacionalidade_create',);
            }
            not_nacionalidade_create:

            // nacionalidade_edit
            if (preg_match('#^/nacionalidade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nacionalidade_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::editAction',));
            }

            // nacionalidade_update
            if (preg_match('#^/nacionalidade/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_nacionalidade_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nacionalidade_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::updateAction',));
            }
            not_nacionalidade_update:

            // nacionalidade_delete
            if (preg_match('#^/nacionalidade/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_nacionalidade_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nacionalidade_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\NacionalidadeController::deleteAction',));
            }
            not_nacionalidade_delete:

        }

        if (0 === strpos($pathinfo, '/yes')) {
            // yes
            if (rtrim($pathinfo, '/') === '/yes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'yes');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::indexAction',  '_route' => 'yes',);
            }

            // yes_show
            if (preg_match('#^/yes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::showAction',));
            }

            // yes_new
            if ($pathinfo === '/yes/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::newAction',  '_route' => 'yes_new',);
            }

            // yes_create
            if ($pathinfo === '/yes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_yes_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::createAction',  '_route' => 'yes_create',);
            }
            not_yes_create:

            // yes_edit
            if (preg_match('#^/yes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::editAction',));
            }

            // yes_update
            if (preg_match('#^/yes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_yes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::updateAction',));
            }
            not_yes_update:

            // yes_delete
            if (preg_match('#^/yes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_yes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\GabineteController::deleteAction',));
            }
            not_yes_delete:

        }

        if (0 === strpos($pathinfo, '/pessoa')) {
            // pessoa
            if (rtrim($pathinfo, '/') === '/pessoa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pessoa');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::indexAction',  '_route' => 'pessoa',);
            }

            // pessoa_show
            if (preg_match('#^/pessoa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::showAction',));
            }

            // pessoa_new
            if ($pathinfo === '/pessoa/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::newAction',  '_route' => 'pessoa_new',);
            }

            // pessoa_create
            if ($pathinfo === '/pessoa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pessoa_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::createAction',  '_route' => 'pessoa_create',);
            }
            not_pessoa_create:

            // pessoa_edit
            if (preg_match('#^/pessoa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::editAction',));
            }

            // pessoa_update
            if (preg_match('#^/pessoa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pessoa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::updateAction',));
            }
            not_pessoa_update:

            // pessoa_delete
            if (preg_match('#^/pessoa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pessoa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\PessoaController::deleteAction',));
            }
            not_pessoa_delete:

        }

        if (0 === strpos($pathinfo, '/candidato')) {
            // candidato
            if (rtrim($pathinfo, '/') === '/candidato') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'candidato');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::indexAction',  '_route' => 'candidato',);
            }

            // candidato_show
            if (preg_match('#^/candidato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidato_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::showAction',));
            }

            // candidato_new
            if ($pathinfo === '/candidato/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::newAction',  '_route' => 'candidato_new',);
            }

            // candidato_create
            if ($pathinfo === '/candidato/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_candidato_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::createAction',  '_route' => 'candidato_create',);
            }
            not_candidato_create:

            // candidato_edit
            if (preg_match('#^/candidato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidato_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::editAction',));
            }

            // candidato_update
            if (preg_match('#^/candidato/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_candidato_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidato_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::updateAction',));
            }
            not_candidato_update:

            // candidato_delete
            if (preg_match('#^/candidato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_candidato_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidato_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\CandidatoController::deleteAction',));
            }
            not_candidato_delete:

        }

        if (0 === strpos($pathinfo, '/formacao')) {
            // formacao
            if (rtrim($pathinfo, '/') === '/formacao') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formacao');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::indexAction',  '_route' => 'formacao',);
            }

            // formacao_show
            if (preg_match('#^/formacao/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacao_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::showAction',));
            }

            // formacao_new
            if ($pathinfo === '/formacao/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::newAction',  '_route' => 'formacao_new',);
            }

            // formacao_create
            if ($pathinfo === '/formacao/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formacao_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::createAction',  '_route' => 'formacao_create',);
            }
            not_formacao_create:

            // formacao_edit
            if (preg_match('#^/formacao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacao_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::editAction',));
            }

            // formacao_update
            if (preg_match('#^/formacao/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formacao_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacao_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::updateAction',));
            }
            not_formacao_update:

            // formacao_delete
            if (preg_match('#^/formacao/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formacao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacao_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\FormacaoController::deleteAction',));
            }
            not_formacao_delete:

        }

        if (0 === strpos($pathinfo, '/profissao')) {
            // profissao
            if (rtrim($pathinfo, '/') === '/profissao') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profissao');
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::indexAction',  '_route' => 'profissao',);
            }

            // profissao_show
            if (preg_match('#^/profissao/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profissao_show')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::showAction',));
            }

            // profissao_new
            if ($pathinfo === '/profissao/new') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::newAction',  '_route' => 'profissao_new',);
            }

            // profissao_create
            if ($pathinfo === '/profissao/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_profissao_create;
                }

                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::createAction',  '_route' => 'profissao_create',);
            }
            not_profissao_create:

            // profissao_edit
            if (preg_match('#^/profissao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profissao_edit')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::editAction',));
            }

            // profissao_update
            if (preg_match('#^/profissao/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_profissao_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profissao_update')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::updateAction',));
            }
            not_profissao_update:

            // profissao_delete
            if (preg_match('#^/profissao/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_profissao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profissao_delete')), array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\ProfissaoController::deleteAction',));
            }
            not_profissao_delete:

        }

        // sifenasifena_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sifenasifena_homepage')), array (  '_controller' => 'sifenasifenaBundle:Default:index',));
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // home_redirect
        if ($pathinfo === '/admin/inicio') {
            return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\HomeController::homeRedirectionAction',  '_route' => 'home_redirect',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'sifena\\sifenaBundle\\Controller\\AcessoController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
