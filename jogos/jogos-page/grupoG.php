<div class="main">
    <?php foreach ($data as $jogos) { ?>
        <?php if ($jogos->group == 'G') { ?>
            <!-- code here -->
            <div style="margin: 20px;" class="match">
                <div class="match-content">
                    <div class="column">
                        <div class="team team--home">
                            <div class="team-logo">

                                <img src="<?php echo $jogos->home_flag ?>" />
                            </div>
                            <h2 class="team-name"><?php echo $traduzir->translate('en', 'pt', $jogos->home_team_en); ?></h2>
                        </div>
                    </div>
                    <div class="column">
                        <div class="match-details">
                            <div class="match-date">
                                <strong><?php echo $jogos->local_date ?></strong>
                            </div>
                            <div class="match-score">
                                <span class="match-score-number"><?php echo $jogos->home_score; ?></span>
                                <span class="match-score-divider">&times</span>
                                <span class="match-score-number"><?php echo $jogos->away_score; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="team team--away">
                            <div class="team-logo">

                                <img src="<?php echo $jogos->away_flag ?>" />
                            </div>
                            <h2 class="team-name"><?php echo $traduzir->translate( 'en', 'pt',$jogos->away_team_en); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>