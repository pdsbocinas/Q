<?php
    namespace VOD\QubitArgentinaBundle\Services\Client\Movistar;

    use VOD\BaseBundle\Services\Client\Base\BaseClient;
    use VOD\QubitArgentinaBundle\Services\Client\Movistar\Response\MovistarProvisionResponse;

    class MovistarClient extends BaseClient {

        public function movistarProvision ($username = false, $password = false, $ani = false) {
            if (false === $username || false === $password || false === $ani) {
                return false;
            }

            $params = [
                'username'  => $username,
                'password'  => $password,
                'ani'       => $ani
            ];

            $movistarProvisionResponse = new MovistarProvisionResponse();
            $movistarProvisionResponse->setData($this->request('payment/movistar/provision', $params, []));

            return $movistarProvisionResponse;
        }
    }