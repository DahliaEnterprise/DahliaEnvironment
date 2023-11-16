CREATE TABLE `transactions_of_session_authorization_regarding_create_session` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `client_credentials_id` mediumint DEFAULT NULL,
  `sha256_regarding_session_authorization_code_to_create_session` varchar(64) DEFAULT NULL,
  `sha256_session_identification` varchar(64) DEFAULT NULL,
  `timestamp` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sha256_regarding_session_authorization_code_to_create_session` (`sha256_regarding_session_authorization_code_to_create_session`),
  UNIQUE KEY `sha256_session_identification` (`sha256_session_identification`)
)
