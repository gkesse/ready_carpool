<?php
//===============================================
namespace app;
//===============================================
class GPrivacyPolicyUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess("Services", "/services");
        $lObj->addAccess("Politiques", "/services/politiques");
        $lObj->addAccess("Politique de confidentialité", "/services/politiques/politique-de-confidentialite");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='PrivacyPolicy1'>\n");
        echo sprintf("<div class='PrivacyPolicy2'>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Politique de confidentialité</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Cette politique de confidentialité est préparée
        par <b>ReadyServices</b> et dont l'adresse enregistrée est <b>ReadyServices, Abidjan, Côte d'Ivoire</b>.
        Nous nous engageons à protéger et à préserver la vie privée de nos visiteurs
        lorsqu'ils visitent notre site ou communiquent par voie électronique avec nous.
        <br><br>
        Cette politique définit la manière dont nous traitons les données personnelles
        que nous collectons auprès de vous ou que vous nous fournissez via notre site Web
        et nos réseaux sociaux. Nous confirmons que nous garderons vos informations
        en sécurité et que nous nous conformerons pleinement à toutes les lois
        et réglementations applicables en matière de protection des données de la <b>Côte d'Ivoire</b>.
        Veuillez lire attentivement ce qui suit pour comprendre ce qui arrive
        aux données personnelles que vous choisissez de nous fournir ou que nous collectons
        auprès de vous lorsque vous visitez nos sites. En soumettant des informations,
        vous acceptez et consentez aux pratiques décrites dans cette politique.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Types d'informations que nous pouvons collecter auprès de vous</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Nous pouvons collecter, stocker et utiliser les types d'informations personnelles suivants
        sur les personnes qui visitent et utilisent notre site Web et nos sites de médias sociaux:
        <br><br>
        <b>Informations que vous nous fournissez</b>. Vous pouvez nous fournir des informations
        vous concernant en remplissant des formulaires sur notre site Web ou sur les réseaux sociaux.
        Cela inclut les informations que vous fournissez lorsque vous soumettez un formulaire de contact/demande.
        Les informations que vous nous fournissez peuvent inclure, sans toutefois s'y limiter, votre nom,
        votre adresse, votre adresse e-mail et votre numéro de téléphone.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Comment pouvons-nous utiliser les informations que nous collectons</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Nous utilisons les informations des manières suivantes:
        <br><br>
        Informations que vous nous fournissez. Nous utiliserons ces informations:
        <ul class='PrivacyPolicy5'>
            <li>Pour vous fournir les informations et/ou les services que vous nous demandez.</li>
            <li>Pour vous contacter afin de fournir les informations demandées.</li>
        </ul>
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Divulgation de vos informations</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Toute information que vous nous fournissez nous sera envoyée directement par courrier électronique
        ou pourra être stockée sur un serveur sécurisé.
        <br><br>
        Nous ne louons, ne vendons ni ne partageons d’informations personnelles vous concernant avec d’autres
        personnes ou sociétés non affiliées.
        <br><br>
        Nous ferons tous les efforts raisonnables pour garantir que vos données personnelles ne soient pas
        divulguées aux institutions et autorités régionales/nationales, sauf si la loi ou d'autres
        réglementations l'exigent.
        <br><br>
        Malheureusement, la transmission d’informations via Internet n’est pas totalement sécurisée.
        Bien que nous fassions de notre mieux pour protéger vos données personnelles, nous ne pouvons
        garantir la sécurité de vos données transmises sur notre site; toute transmission est à vos propres
        risques. Une fois que nous aurons reçu vos informations, nous utiliserons des procédures
        et des fonctionnalités de sécurité strictes pour tenter d'empêcher tout accès non autorisé.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Vos droits – accès à vos données personnelles</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Vous avez le droit de garantir que vos données personnelles sont traitées légalement <b>(« Droit d'accès du sujet »)</b>.
        Votre droit d'accès peut être exercé conformément aux lois et réglementations en matière de protection des données.
        <br><br>
        Toute demande d'accès au sujet doit être adressée par écrit à <b>ReadyServices, Abidjan, Côte d'Ivoire</b>.
        Nous vous fournirons vos données personnelles dans les délais légaux.
        Pour nous permettre de retracer vos données personnelles que nous pourrions détenir,
        nous pourrons être amenés à vous demander des informations complémentaires.
        <br><br>
        Si vous avez une plainte concernant la façon dont nous avons utilisé vos informations,
        vous avez le droit de déposer une plainte auprès du Bureau du commissaire à l'information <b>(ICO)</b>.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Modifications de notre politique de confidentialité</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Toute modification que nous pourrions apporter à notre politique de confidentialité à l'avenir
        sera publiée sur cette page et, le cas échéant, vous sera notifiée par e-mail.
        <br><br>
        Veuillez revenir fréquemment pour voir les mises à jour ou les modifications apportées
        à notre politique de confidentialité.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='PrivacyPolicy3'>Contact</h1>\n");
        //===============================================
        echo sprintf("<div class='PrivacyPolicy4'>
        Les questions, commentaires et demandes concernant cette politique de confidentialité sont
        les bienvenus et doivent être adressés à <span class='PrivacyPolicy6'>readydevz@gmail.com</span>.
        </div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>