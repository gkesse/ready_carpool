<?php
//===============================================
class GTermsUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
        $lObj->addAccess("Politiques", "/politiques");
        $lObj->addAccess("Conditions générales d'utilisation", "/politiques/conditions-generales-utilisation");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Terms1'>\n");
        echo sprintf("<div class='Terms2'>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Conditions générales d'utilisation</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Dernière mise à jour: 16 octobre 2023
        <br><br>
        Veuillez lire attentivement ces termes et conditions avant d'utiliser notre service.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Interprétation et définitions</h1>\n");
        //===============================================
        echo sprintf("<h2 class='Terms6'>Interprétation</h2>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Les mots dont la lettre initiale est en majuscule ont des significations définies dans les conditions suivantes.
        Les définitions suivantes auront la même signification qu’elles apparaissent au singulier ou au pluriel.
        </div>\n");
        //===============================================
        echo sprintf("<h2 class='Terms6'>Définitions</h2>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Aux fins des présentes Conditions générales:
        <ul class='Terms5'>
            <li><b>Application</b> désigne le logiciel fourni par la Société,
            téléchargé par Vous sur tout appareil électronique, nommé <b>ReadyLoop</b>.
            <br><br></li>

            <li><b>Application Store</b> désigne le service de distribution numérique exploité
            et développé par Apple Inc. (Apple App Store) ou Google Inc. (Google Play Store)
            dans lequel l'Application a été téléchargée.
            <br><br></li>

            <li><b>Société affiliée</b> désigne une entité qui contrôle, est contrôlée par
            ou est sous contrôle commun avec un parti, où « contrôle » désigne la propriété de 50%% ou plus
            des actions, participations ou autres titres donnant droit à voter pour l'élection
            d'administrateurs ou d'autres autorités de gestion.
            <br><br></li>

            <li><b>Le pays</b> fait référence à: Côte d'Ivoire.
            <br><br></li>

            <li><b>La Société</b> (appelée « la Société », « Nous », « Notre » ou « Notre » dans le présent Accord)
            fait référence à <b>ReadyLoop</b>.
            <br><br></li>

            <li><b>Appareil</b> désigne tout appareil pouvant accéder au Service tel qu'un ordinateur,
            un téléphone portable ou une tablette numérique.
            <br><br></li>

            <li><b>Service</b> fait référence à l'Application ou au Site Internet ou aux deux.
            <br><br></li>

            <li><b>Les Conditions générales</b> (également appelées « Conditions ») désignent les présentes
            Conditions générales qui constituent l'intégralité de l'accord entre Vous et la Société
            concernant l'utilisation du Service. Cet accord de conditions générales a été créé à l'aide
            du générateur de conditions générales.
            <br><br></li>

            <li><b>Service de médias sociaux tiers</b> désigne tout service ou contenu (y compris les données,
            informations, produits ou services) fourni par un tiers qui peut être affiché, inclus ou mis à
            disposition par le Service.
            <br><br></li>

            <li><b>Le site Web</b> fait référence à ReadyLoop,
            accessible depuis https://readydev.ovh:8000/.
            <br><br></li>

            <li><b>Vous</b> désignez la personne qui accède ou utilise le Service, ou la société
            ou toute autre entité juridique au nom de laquelle cette personne accède ou utilise le Service,
            selon le cas.
            </li>
        </ul>
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Reconnaissance</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Il s'agit des Conditions générales régissant l'utilisation de ce Service et de l'accord qui opère
        entre Vous et la Société. Les présentes Conditions générales définissent les droits et obligations
        de tous les utilisateurs concernant l'utilisation du Service.
        <br><br>
        Votre accès et votre utilisation du Service sont conditionnés à votre acceptation et à votre respect
        des présentes Conditions générales. Ces Conditions générales s'appliquent à tous les visiteurs,
        utilisateurs et autres personnes qui accèdent ou utilisent le Service.
        <br><br>
        En accédant ou en utilisant le Service, vous acceptez d'être lié par les présentes Conditions générales.
        Si vous n'êtes pas d'accord avec une partie de ces conditions générales, vous ne pouvez pas accéder au service.
        <br><br>
        Vous déclarez que vous avez plus de 18 ans.
        La Société n'autorise pas les personnes de moins de 18 ans à utiliser le Service.
        <br><br>
        Votre accès et votre utilisation du Service sont également conditionnés à votre acceptation
        et à votre respect de la politique de confidentialité de la Société.
        Notre politique de confidentialité décrit nos politiques et procédures relatives à la collecte,
        à l'utilisation et à la divulgation de vos informations personnelles lorsque vous utilisez
        l'application ou le site Web et vous informe de vos droits à la vie privée et de la manière dont
        la loi vous protège. Veuillez lire attentivement notre politique de confidentialité avant d'utiliser notre service.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Liens vers d'autres sites Web</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Notre Service peut contenir des liens vers des sites Web ou des services tiers qui ne sont ni détenus
        ni contrôlés par la Société.
        <br><br>
        La Société n'a aucun contrôle et n'assume aucune responsabilité quant au contenu, aux politiques de
        confidentialité ou aux pratiques de tout site Web ou service tiers. Vous reconnaissez et acceptez
        en outre que la Société ne sera pas responsable, directement ou indirectement, de tout dommage ou
        perte causé ou prétendument causé par ou en relation avec l'utilisation ou la confiance accordée à
        un tel contenu, biens ou services disponibles sur ou via l'un de ces sites ou services Web.
        <br><br>
        Nous vous conseillons fortement de lire les termes et conditions et les politiques de confidentialité
        de tout site Web ou service tiers que vous visitez.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Résiliation</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Nous pouvons résilier ou suspendre votre accès immédiatement, sans préavis ni responsabilité,
        pour quelque raison que ce soit, y compris, sans limitation, si vous violez les présentes conditions générales.
        <br><br>
        En cas de résiliation, votre droit d'utiliser le service cessera immédiatement.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Limitation de responsabilité</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Malgré tout dommage que vous pourriez subir, l'entière responsabilité de la Société et de l'un de
        ses fournisseurs en vertu de toute disposition des présentes Conditions et votre recours exclusif
        pour tout ce qui précède sera limité au montant effectivement payé par vous via le Service ou 5000 FCFA
        si vous n'avez rien acheté via le service.
        <br><br>
        Dans la mesure permise par la loi applicable, la Société ou ses fournisseurs ne pourront en aucun
        cas être tenus responsables de tout dommage spécial, accidentel, indirect ou consécutif, quel qu'il
        soit (y compris, mais sans s'y limiter, les dommages pour perte de profits, perte de données ou
        d'autres informations, en cas d'interruption des activités, de blessures corporelles, de perte de
        confidentialité découlant de ou liées de quelque manière que ce soit à l'utilisation ou à
        l'incapacité d'utiliser le Service, aux logiciels tiers et/ou au matériel tiers utilisés avec le
        Service, ou autrement en relation avec toute disposition des présentes Conditions),
        même si la Société ou tout fournisseur a été informé de la possibilité de tels dommages
        et même si le recours n'atteint pas son objectif essentiel.
        <br><br>
        Certains États n'autorisent pas l'exclusion des garanties implicites ou la limitation de responsabilité
        pour les dommages accidentels ou consécutifs, ce qui signifie que certaines des limitations ci-dessus
        peuvent ne pas s'appliquer. Dans ces États, la responsabilité de chaque partie sera limitée dans
        la plus grande mesure permise par la loi.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Avis de non-responsabilité « TEL QUEL » et « TEL QUE DISPONIBLE »</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Le Service vous est fourni « TEL QUEL » et « TEL QUE DISPONIBLE » et avec tous les défauts et défauts
        sans garantie d'aucune sorte. Dans la mesure permise par la loi applicable, la Société, en son propre
        nom et au nom de ses sociétés affiliées et de ses concédants de licence et prestataires de services
        respectifs, décline expressément toute garantie, qu'elle soit expresse, implicite, légale ou autre,
        en ce qui concerne le Service, y compris toutes les garanties implicites de qualité marchande,
        d'adéquation à un usage particulier, de titre et de non-contrefaçon, ainsi que les garanties pouvant
        découler du cours de la transaction, du cours de l'exécution, de l'utilisation ou des pratiques
        commerciales. Sans limitation de ce qui précède, la Société ne fournit aucune garantie ni engagement,
        et ne fait aucune déclaration de quelque nature que ce soit selon laquelle le Service répondra à vos
        exigences, atteindra les résultats escomptés, sera compatible ou fonctionnera avec tout autre
        logiciel, application, système ou service, fonctionnera sans interruption, répondre à toutes les
        normes de performance ou de fiabilité ou être exempt d'erreurs ou que toute erreur ou défaut peut
        ou sera corrigé.
        <br><br>
        Sans limiter ce qui précède, ni la Société ni aucun de ses fournisseurs ne font aucune déclaration
        ou garantie de quelque nature que ce soit, expresse ou implicite: (1) quant au fonctionnement
        ou à la disponibilité du Service, ou aux informations, au contenu et aux matériaux ou produits
        inclus dessus; (2) que le Service sera ininterrompu ou sans erreur; (3) quant à l'exactitude,
        la fiabilité ou l'actualité de toute information ou contenu fourni via le Service; ou (4) que le
        Service, ses serveurs, le contenu ou les e-mails envoyés depuis ou au nom de la Société sont exempts
        de virus, scripts, chevaux de Troie, vers, logiciels malveillants, bombes à retardement ou autres
        composants nuisibles.
        <br><br>
        Certaines juridictions n'autorisent pas l'exclusion de certains types de garanties ou de limitations
        sur les droits statutaires applicables d'un consommateur, de sorte que tout ou partie des exclusions
        et limitations ci-dessus peuvent ne pas s'appliquer à vous. Mais dans un tel cas, les exclusions et
        limitations énoncées dans cette section seront appliquées dans toute la mesure applicable en vertu
        de la loi applicable.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Loi applicable</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Les lois du pays, à l'exclusion de ses règles de conflits de lois, régissent les présentes conditions
        et votre utilisation du service. Votre utilisation de l’Application peut également être soumise à
        d’autres lois locales, étatiques, nationales ou internationales.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Résolution des litiges</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Si vous avez des préoccupations ou un litige concernant le Service, vous acceptez d'essayer d'abord
        de résoudre le litige de manière informelle en contactant la Société.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Pour les utilisateurs de l’Union européenne (UE)</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Si Vous êtes un consommateur de l’Union Européenne, vous bénéficierez de toutes les dispositions
        impératives de la loi du pays dans lequel vous résidez.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Conformité juridique aux États-Unis</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Vous déclarez et garantissez que (1) vous n'êtes pas situé dans un pays soumis à l'embargo
        du gouvernement des États-Unis ou qui a été désigné par le gouvernement des États-Unis comme un pays
        « soutenant le terrorisme », et (2) vous n'êtes pas répertorié sur n’importe quelle liste du
        gouvernement des États-Unis de parties interdites ou restreintes.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Divisibilité et Renonciation</h1>\n");
        //===============================================
        echo sprintf("<h2 class='Terms6'>Divisibilité</h2>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Si une disposition des présentes Conditions est jugée inapplicable ou invalide, cette disposition
        sera modifiée et interprétée pour atteindre les objectifs de cette disposition dans la plus grande
        mesure possible en vertu de la loi applicable et les dispositions restantes resteront pleinement en
        vigueur.
        </div>\n");
        //===============================================
        echo sprintf("<h2 class='Terms6'>Renonciation</h2>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Sauf dans les cas prévus aux présentes, le fait de ne pas exercer un droit ou d'exiger l'exécution
        d'une obligation en vertu des présentes Conditions n'affectera pas la capacité d'une partie à exercer
        ce droit ou à exiger une telle exécution à tout moment par la suite et la renonciation à une
        violation ne constituera pas une renonciation à tout manquement ultérieur.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Traduction Interprétation</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Ces Conditions Générales peuvent avoir été traduites si Nous les avons mises à votre disposition sur
        notre Service. Vous acceptez que le texte anglais original prévaudra en cas de litige.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Modifications de ces termes et conditions</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Nous nous réservons le droit, à notre seule discrétion, de modifier ou de remplacer ces conditions à
        tout moment. Si une révision est importante, nous ferons des efforts raisonnables pour fournir un
        préavis d'au moins 30 jours avant l'entrée en vigueur de toute nouvelle condition. Ce qui constitue
        un changement important sera déterminé à notre seule discrétion.
        <br><br>
        En continuant à accéder ou à utiliser notre service après l'entrée en vigueur de ces révisions,
        vous acceptez d'être lié par les conditions révisées. Si vous n'acceptez pas les nouvelles conditions,
        en tout ou en partie, veuillez cesser d'utiliser le site Web et le Service.
        </div>\n");
        //===============================================
        echo sprintf("<h1 class='Terms3'>Contactez-nous</h1>\n");
        //===============================================
        echo sprintf("<div class='Terms4'>
        Si vous avez des questions concernant ces conditions générales, vous pouvez nous contacter:
        <ul class='Terms5'>
            <li>Par email : readydevz@gmail.com</li>
        </ul>
        </div>\n");
        //===============================================
        //echo sprintf("<div class='Terms7'>
        //Généré à l'aide <a class='Terms8' target='_blank' href='https://www.termsfeed.com/privacy-policy-generator/'>
        //du générateur de politique de confidentialité TermsFeed</a>
        //</div>\n");
        //===============================================
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>