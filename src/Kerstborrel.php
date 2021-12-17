<?php

namespace TDD;

class KerstBorrel {

    public function kostenKerstpakket($aantalPersoneelsleden, $maxBudget) {

        $dranken = 8 * round(0.5 * $aantalPersoneelsleden);

        $snacks = 2* round(6.5 * $aantalPersoneelsleden);

        $kostenKerstpakket = $dranken - $snacks / $aantalPersoneelsleden;

        return round ($kostenKerstpakket);

    }
}

?>