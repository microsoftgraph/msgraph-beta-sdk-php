<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ReceiverProtocol extends Enum {
    public const FTP = "ftp";
    public const FTPS = "ftps";
    public const SYSLOG_UDP = "syslogUdp";
    public const SYSLOG_TCP = "syslogTcp";
    public const SYSLOG_TLS = "syslogTls";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
