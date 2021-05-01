<!-- PERSONAGEM -->
<div class="row pl-4">
    <div class="col-12">
        <h2>Personagem</h2>
    </div>

    <!-- HP DO PERSONAGEM -->
    <div class="col-12">
        <div class="col-4">
            <h5>
                <div class="row">
                    <div class="col-2">HP:</div>
                    <div class="col"><?php echo $atualHp; ?></div>
                </div>
            </h5>
            <div class="bg-dark p-1">
                <div class="progress">
                    <div class="bg-success progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($atualHp / $maxHp) * 100; ?>%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXP DO PERSONAGEM -->
    <div class="col-12">
        <div class="col-4">
            <h5>
                <div class="row">
                    <div class="col-2">EXP:</div>
                    <div class="col"><?php echo $atualExp; ?></div>
                </div>
            </h5>
            <div class="bg-dark p-1">
                <div class="progress">
                    <div class="bg-dark progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($atualExp / $maxExp) * 100; ?>%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- STATUS DO PERSONAGEM -->
    <div class="col-12">
        <div class="col-4">
            <h5>
                <div class="row">
                    <div class="col-2">Dano:</div>
                    <div class="col">10</div>
                </div>
            </h5>
        </div>
    </div>
</div>