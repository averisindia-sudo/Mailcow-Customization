<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user_index.twig */
class __TwigTemplate_ca27a1f246c1ae088c9b788ebaf41f5f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "user_index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">

    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center text-break\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 11), "login_user", [], "any", false, false, false, 11), "html", null, true);
        yield "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
        ";
        // line 16
        if ( !($context["oauth2_request"] ?? null)) {
            // line 17
            yield "        <div class=\"ms-4 d-grid d-sm-block\">
          <button type=\"button\" ";
            // line 18
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "disabled=\"true\"";
            }
            yield " class=\"text-secondary btn p-0 border-0 bg-transparent ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"flag-icon flag-icon-";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span>
          </button>
          <ul class=\"dropdown-menu ms-auto login\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 23
                yield "              <li>
                <a class=\"dropdown-item ";
                // line 24
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                  <span class=\"flag-icon flag-icon-";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["key"],  -2, null), "html", null, true);
                yield "\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "          </ul>
        </div>
        ";
        }
        // line 32
        yield "      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\">
          <img class=\"main-logo\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow\">
          <img class=\"main-logo-dark\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow-logo-dark\">
        </div>
        ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 38) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 38))) {
            // line 39
            yield "        <div class=\"my-4 alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 39), "html", null, true);
            yield " rot-enc ui-announcement-alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 39)), "html", null, true);
            yield "</div>
        ";
        }
        // line 41
        yield "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 41), "authorize_app", [], "any", false, false, false, 41), "html", null, true);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 41);
        }
        yield "</legend><hr />
        ";
        // line 42
        if (($context["is_mobileconfig"] ?? null)) {
            // line 43
            yield "        <div class=\"my-4 alert alert-info \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 43), "mobileconfig_info", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>
        ";
        }
        // line 45
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "force_sso", [], "any", false, false, false, 45) != 1)) {
            // line 46
            yield "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
            // line 51
            if (($context["is_mobileconfig"] ?? null)) {
                yield "email";
            } else {
                yield "text";
            }
            yield "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
            yield "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 55), "password", [], "any", false, false, false, 55), "html", null, true);
            yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 58), "password", [], "any", false, false, false, 58), "html", null, true);
            yield "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"mt-2 text-muted\" style=\"font-size: 0.9rem;\">
            <a href=\"/reset-password\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 62), "forgot_password", [], "any", false, false, false, 62), "html", null, true);
            yield "</a>
          </div>
          <div class=\"d-flex justify-content-between mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg btn-success w-100 mt-2 mx-auto\" style=\"max-width: 400px;\" value=\"Login\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 65), "login", [], "any", false, false, false, 65), "html", null, true);
            yield "</button>
          </div>
        </form>
        <div class=\"hr-title\"><strong>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 68), "other_logins", [], "any", false, false, false, 68), "html", null, true);
            yield "</strong></div>
        ";
        }
        // line 70
        yield "        <div class=\"d-flex flex-column align-items-center\">
          ";
        // line 71
        if (($context["has_iam_sso"] ?? null)) {
            // line 72
            yield "          <a class=\"btn btn-xs-lg btn-secondary w-100 mt-2\" style=\"max-width: 400px;\" href=\"/?iam_sso=1\"><i class=\"bi bi-cloud-arrow-up-fill\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 72), "iam_sso", [], "any", false, false, false, 72), "html", null, true);
            yield "</a>
          ";
        }
        // line 74
        yield "          ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "force_sso", [], "any", false, false, false, 74) != 1)) {
            // line 75
            yield "          <a class=\"btn btn-xs-lg btn-secondary w-100 mt-2\" style=\"max-width: 400px;\" href=\"#\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 75), "fido2_webauthn", [], "any", false, false, false, 75), "html", null, true);
            yield "</a>
          ";
        }
        // line 77
        yield "        </div>
        ";
        // line 78
        if (($context["login_delay"] ?? null)) {
            // line 79
            yield "        <p><div class=\"my-4 alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 79), "delayed", [], "any", false, false, false, 79), ($context["login_delay"] ?? null)), "html", null, true);
            yield "</b></div></p>
        ";
        }
        // line 81
        yield "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 82
        if ((( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null))) &&  !($context["hide_mailcow_apps"] ?? null))) {
            // line 83
            yield "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 83);
            yield "</legend><hr />
        <div class=\"my-2 apps\">
          ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 86
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["app"], "hide", [], "any", false, false, false, 86)) {
                    // line 87
                    yield "              ";
                    if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 87)))) {
                        // line 88
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 89), "html", null, true);
                        yield "\" role=\"button\" ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 89)) {
                            yield "title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 89), "html", null, true);
                            yield "\"";
                        }
                        yield " class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 89), "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 92
                    yield "          ";
                }
                // line 93
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 95
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 96
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["val"], "hide", [], "any", false, false, false, 96)) {
                        // line 97
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 98
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "link", [], "any", false, false, false, 98), "html", null, true);
                        yield "\" role=\"button\" class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 101
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "        </div>
        <div>
        </div>
        ";
        }
        // line 107
        yield "      </div>
    </div>

    ";
        // line 110
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 110) != 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 110) != 1))) {
            // line 111
            yield "    <p class=\"text-center mt-3 text-muted\" style=\"font-size: 0.9rem;\">
      ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 112), "login_linkstext", [], "any", false, false, false, 112), "html", null, true);
            yield "<br>
      ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 113) != 1)) {
                yield "<a href=\"/admin\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 113), "login_admintext", [], "any", false, false, false, 113), "html", null, true);
                yield "</a>";
            }
            // line 114
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 114) != 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 114) != 1))) {
                yield "|";
            }
            // line 115
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 115) != 1)) {
                yield "<a href=\"/domainadmin\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 115), "login_domainadmintext", [], "any", false, false, false, 115), "html", null, true);
                yield "</a>";
            }
            // line 116
            yield "    </p>
    ";
        }
        // line 118
        yield "  </div>
</div>
";
        // line 120
        if (( !($context["oauth2_request"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 120))) {
            // line 121
            yield "<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 125), "help", [], "any", false, false, false, 125), "html", null, true);
            yield "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          <p>";
            // line 129
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 129);
            yield "</p>
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  405 => 129,  398 => 125,  392 => 121,  390 => 120,  386 => 118,  382 => 116,  375 => 115,  370 => 114,  364 => 113,  360 => 112,  357 => 111,  355 => 110,  350 => 107,  344 => 103,  338 => 102,  332 => 101,  324 => 98,  321 => 97,  318 => 96,  313 => 95,  308 => 94,  302 => 93,  299 => 92,  285 => 89,  282 => 88,  279 => 87,  276 => 86,  272 => 85,  266 => 83,  264 => 82,  261 => 81,  255 => 79,  253 => 78,  250 => 77,  244 => 75,  241 => 74,  235 => 72,  233 => 71,  230 => 70,  225 => 68,  219 => 65,  213 => 62,  206 => 58,  200 => 55,  187 => 51,  181 => 48,  177 => 46,  174 => 45,  168 => 43,  166 => 42,  157 => 41,  149 => 39,  147 => 38,  142 => 36,  138 => 35,  133 => 32,  128 => 29,  116 => 25,  108 => 24,  105 => 23,  101 => 22,  95 => 19,  89 => 18,  86 => 17,  84 => 16,  76 => 11,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user_index.twig", "/web/templates/user_index.twig");
    }
}
