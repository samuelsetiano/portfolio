<?php

$documents = [

    [
        'id' => 'biophotonics',
        'title' => 'Fluorophores in Microscopic Imaging: Comparative Analysis of Small Molecules and Fluorescent Proteins',
        'pdf' => 'assets/pdf/biophotonique-samuel-setiano.pdf',
        'thumb' => 'assets/img/biophotonique-thumb.jpg',
        'auteur' => 'Samuel Setiano',
        'universite' => 'University of Strasbourg',
        'annee' => 'January 2025',
        'description' => "This work presents the fluorophores used in microscopic imaging, comparing small molecules and fluorescent proteins. Fluorescence enables real-time observation of biological processes, particularly the detection of biomarkers in living tissues."
    ],

    [
        'id' => 'sociology-health',
        'title' => "Scurvy in an Isolated Elderly Patient: An Illustration of the Limits of a Strictly Medical Approach to Health",
        'pdf' => 'assets/pdf/sociologie-sante-samuel-setiano.pdf',
        'thumb' => 'assets/img/ociologie-sante-thumb.jpg',
        'auteur' => 'Samuel Setiano',
        'universite' => 'University of Strasbourg',
        'annee' => 'January 2025',
        'description' => "This paper analyzes a recent case of scurvy in an isolated patient, highlighting the limits of a purely biomedical approach. It shows how social health inequalities and the technologization of care can delay the diagnosis of preventable diseases, calling for greater consideration of social factors in medical practice."
    ],

    [
        'id' => 'health-law',
        'title' => 'The Partition of the Healing Art: The Difficult Compromise Between Scientific Ideal and Harsh Social Realities',
        'pdf' => 'assets/pdf/droit-sante-samuel-setiano.pdf',
        'thumb' => 'assets/img/droit-sante-thumb.jpg',
        'auteur' => 'Samuel Setiano, Wilem Barbier, Esteban Heinkele',
        'universite' => 'University of Strasbourg',
        'annee' => 'January 2025',
        'description' => "This report explores the evolution of French medicine from the late 18th to the 19th century. Through the analysis of texts by Cabanis, Fourcroy, Thouret, and Carret, it highlights the tensions between scientific progress and social justice. The aim is to understand how to balance growing medical demands with equitable access to care—an ongoing issue in the face of territorial and social inequalities."
    ],

    [
        'id' => 'thermochemistry',
        'title' => 'Lab Report – Thermochemistry: Calorimetry',
        'pdf' => 'assets/pdf/calorimetrie-samuel-setiano.pdf',
        'thumb' => 'assets/img/calorimetrie-thumb.jpg',
        'auteur' => 'Samuel Setiano',
        'universite' => 'University of Strasbourg',
        'annee' => 'March 2024',
        'description' => "The aim of this practical work was to determine the enthalpy of dissolution of various compounds using a calorimeter. Through the use of a Dewar vessel and a digital thermometer, the experiments addressed fundamental thermochemistry concepts such as enthalpy, heat exchange, and heat capacity."
    ],

    [
        'id' => 'radioactivity',
        'title' => 'Radioactivity in the Environment and Health Risks',
        'pdf' => 'assets/pdf/radioactivite-samuel-setiano.pdf',
        'thumb' => 'assets/img/radioactivite-thumb.jpg',
        'auteur' => 'Samuel Setiano',
        'universite' => 'University of Strasbourg',
        'annee' => 'January 2024',
        'description' => "This report examines the human impacts of nuclear disasters (Chernobyl, Fukushima). Despite few direct deaths from radiation, the long-term social, psychological, and health consequences are significant."
    ],

    [
        'id' => 'wave-particle-duality',
        'title' => 'The Wave-Particle Duality of Matter',
        'pdf' => 'assets/pdf/dualite-onde-corpuscule-samuel-setiano.pdf',
        'thumb' => 'assets/img/dualite-onde-corpuscule-thumb.jpg',
        'auteur' => 'Samuel Setiano',
        'universite' => 'University of Strasbourg',
        'annee' => 'January 2024',
        'description' => "This reading summary traces the discovery of wave-particle duality, from light experiments (Young, Planck, Einstein) to electrons and neutrons (Davisson-Germer, Feynman). It shows that all particles exhibit both wave and particle behavior, a central principle of quantum mechanics."
    ]

];


foreach ($documents as $doc) {
    if (!file_exists($doc['thumb'])) {
        try {
            $imagick = new Imagick();
            $imagick->setResolution(300, 300);
            $imagick->readImage($doc['pdf'] . '[0]');
            $imagick->setImageBackgroundColor('white');
            $imagick = $imagick->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
            $imagick->setImageFormat('jpeg');
            $imagick->setImageCompressionQuality(85);
            $imagick->writeImage($doc['thumb']);
            $imagick->clear();
            $imagick->destroy();
        } catch (Exception $e) {
            echo "Erreur pour le fichier {$doc['pdf']} : " . $e->getMessage();
        }
    }
}



?>


<section class="section d-flex  align-items-center justify-content-center p-5" id="projet">

    <div class="row justify-content-center">

        <div class="col-lg-9"> <!-- 75% of the width (col-lg-9 means 75% on large screens) -->

            <div class="container p-5">
                <h2 class="mt-4">Projects</h2>
                <p>Here are some projects I've worked on (mostly in French). Click on the cards to view the documents.
                </p>
            </div>

            <?php foreach ($documents as $doc): ?>
                <div class="card p-3 mb-5" role="button" data-bs-toggle="modal" data-bs-target="#modal-<?= $doc['id'] ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center justify-content-center order-2 order-md-1">
                            <img src="<?= $doc['thumb'] ?>" class="card-img m-3" alt="Miniature PDF">
                        </div>
                        <div class="col-md-8 order-1 order-md-2">
                            <div class="card-body p-3">
                                <h5 class="card-title"><?= htmlspecialchars($doc['title']) ?></h5>
                                <p class="card-text">
                                    <small class="text-muted"><?= htmlspecialchars($doc['auteur']) ?> -
                                        <?= htmlspecialchars($doc['universite']) ?> -
                                        <?= htmlspecialchars($doc['annee']) ?></small>
                                </p>
                                <p class="card-text">
                                    <strong>Abstact</strong><br>
                                    <?= nl2br(htmlspecialchars($doc['description'])) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal-<?= $doc['id'] ?>" tabindex="-1"
                    aria-labelledby="modalLabel-<?= $doc['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel-<?= $doc['id'] ?>">
                                    <?= htmlspecialchars($doc['title']) ?>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body" style="height: 80vh;">
                                <div id="pdf-container-<?= $doc['id'] ?>" style="width:100%; height:100%;">
                                    Chargement du PDF...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Script d’activation de PDFObject à l’ouverture de la modal -->
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const modals = document.querySelectorAll('.modal');
                        modals.forEach(modal => {
                            modal.addEventListener('shown.bs.modal', () => {
                                const modalId = modal.id.replace('modal-', ''); // Extraire l'ID du document
                                const pdfUrl = "<?= $doc['pdf'] ?>";
                                const containerId = '#pdf-container-' + modalId;

                                PDFObject.embed(pdfUrl, containerId, {
                                    height: "100%",
                                    fallbackLink: `<p>Ce navigateur ne peut pas afficher le PDF. <a href="${pdfUrl}" target="_blank">Cliquez ici pour le télécharger.</a></p>`
                                });
                            });
                        });
                    });
                </script>



            <?php endforeach; ?>
        </div>
    </div>
</section>