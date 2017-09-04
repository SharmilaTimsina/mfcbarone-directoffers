--Currencies Table
INSERT INTO `directoffers`.`currencies` (`id`, `currency`, `decimal_separator`, `iso_code`, `iso_symbol`, `thousands_separator`) VALUES ('1', 'Dollar', ',', 'USD', '$', '.');

--Connections Table
INSERT INTO `directoffers`.`connections` (`id`, `integration_protocol`, `integration_type`, `name`, `privatekey`, `public_key`, `status`, `status_date`, `status_reason`, `url`, `zeta_password`, `zeta_user`, `currency_id`) VALUES ('1', 'HTTP', 'BROKER', 'TPAY', '59wW4vviKrhSTEeumLDx', 'gGU58u2njocHrYMbJcKA', 'ACTIVE', NOW(), 'dev', 'http://staging.tpayadmin.tpay.me', 'StagingP@ssw0rd1234', 'zeta@tpay.me', '1');