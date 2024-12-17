<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudAppDiscoveryReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudAppDiscoveryReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppDiscoveryReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppDiscoveryReport {
        return new CloudAppDiscoveryReport();
    }

    /**
     * Gets the anonymizeMachineData property value. Use 1 if the machine information is anonymized; otherwise use 0.
     * @return bool|null
    */
    public function getAnonymizeMachineData(): ?bool {
        $val = $this->getBackingStore()->get('anonymizeMachineData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anonymizeMachineData'");
    }

    /**
     * Gets the anonymizeUserData property value. Use 1 if the user information is anonymized; otherwise use 0.
     * @return bool|null
    */
    public function getAnonymizeUserData(): ?bool {
        $val = $this->getBackingStore()->get('anonymizeUserData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anonymizeUserData'");
    }

    /**
     * Gets the createdDateTime property value. The date in the format specified. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. A comment or description for the report.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the continuous report.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anonymizeMachineData' => fn(ParseNode $n) => $o->setAnonymizeMachineData($n->getBooleanValue()),
            'anonymizeUserData' => fn(ParseNode $n) => $o->setAnonymizeUserData($n->getBooleanValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isSnapshotReport' => fn(ParseNode $n) => $o->setIsSnapshotReport($n->getBooleanValue()),
            'lastDataReceivedDateTime' => fn(ParseNode $n) => $o->setLastDataReceivedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'logDataProvider' => fn(ParseNode $n) => $o->setLogDataProvider($n->getEnumValue(LogDataProvider::class)),
            'logFileCount' => fn(ParseNode $n) => $o->setLogFileCount($n->getIntegerValue()),
            'receiverProtocol' => fn(ParseNode $n) => $o->setReceiverProtocol($n->getEnumValue(ReceiverProtocol::class)),
            'supportedEntityTypes' => fn(ParseNode $n) => $o->setSupportedEntityTypes($n->getCollectionOfEnumValues(EntityType::class)),
            'supportedTrafficTypes' => fn(ParseNode $n) => $o->setSupportedTrafficTypes($n->getCollectionOfEnumValues(TrafficType::class)),
        ]);
    }

    /**
     * Gets the isSnapshotReport property value. Use 1 for a snapshot report; otherwise use 0.
     * @return bool|null
    */
    public function getIsSnapshotReport(): ?bool {
        $val = $this->getBackingStore()->get('isSnapshotReport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSnapshotReport'");
    }

    /**
     * Gets the lastDataReceivedDateTime property value. The date when the data was last received. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastDataReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastDataReceivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastDataReceivedDateTime'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date when the continuous report was last modified. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the logDataProvider property value. The applicable log data provider. Possible values are: barracuda, bluecoat, checkpoint, ciscoAsa, ciscoIronportProxy, fortigate, paloAlto, squid, zscaler, mcafeeSwg, ciscoScanSafe, juniperSrx, sophosSg, websenseV75, websenseSiemCef, machineZoneMeraki, squidNative, ciscoFwsm, microsoftIsaW3C, sonicwall, sophosCyberoam, clavister, customParser, juniperSsg, zscalerQradar, juniperSrxSd, juniperSrxWelf, microsoftConditionalAppAccess, ciscoAsaFirepower, genericCef, genericLeef, genericW3C, iFilter, checkpointXml, checkpointSmartViewTracker, barracudaNextGenFw, barracudaNextGenFwWeblog, microsoftDefenderForEndpoint, zscalerCef, sophosXg, iboss, forcepoint, fortios, ciscoIronportWsaIi, paloAltoLeef, forcepointLeef, stormshield, contentkeeper, ciscoIronportWsaIii, checkpointCef, corrata, ciscoFirepowerV6, menloSecurityCef, watchguardXtm, openSystemsSecureWebGateway, wandera, unknownFutureValue.
     * @return LogDataProvider|null
    */
    public function getLogDataProvider(): ?LogDataProvider {
        $val = $this->getBackingStore()->get('logDataProvider');
        if (is_null($val) || $val instanceof LogDataProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logDataProvider'");
    }

    /**
     * Gets the logFileCount property value. The count of log files history.
     * @return int|null
    */
    public function getLogFileCount(): ?int {
        $val = $this->getBackingStore()->get('logFileCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logFileCount'");
    }

    /**
     * Gets the receiverProtocol property value. The applicable receiver protocol. Possible values are: ftp, ftps, syslogUdp, syslogTcp, syslogTls, unknownFutureValue.
     * @return ReceiverProtocol|null
    */
    public function getReceiverProtocol(): ?ReceiverProtocol {
        $val = $this->getBackingStore()->get('receiverProtocol');
        if (is_null($val) || $val instanceof ReceiverProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receiverProtocol'");
    }

    /**
     * Gets the supportedEntityTypes property value. The supported entity type. Possible values are: userName, ipAddress, machineName, other, unknown, unknownFutureValue.
     * @return array<EntityType>|null
    */
    public function getSupportedEntityTypes(): ?array {
        $val = $this->getBackingStore()->get('supportedEntityTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EntityType::class);
            /** @var array<EntityType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedEntityTypes'");
    }

    /**
     * Gets the supportedTrafficTypes property value. The supported traffic type. Possible values are: downloadedBytes, uploadedBytes, unknown, unknownFutureValue.
     * @return array<TrafficType>|null
    */
    public function getSupportedTrafficTypes(): ?array {
        $val = $this->getBackingStore()->get('supportedTrafficTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrafficType::class);
            /** @var array<TrafficType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedTrafficTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('anonymizeMachineData', $this->getAnonymizeMachineData());
        $writer->writeBooleanValue('anonymizeUserData', $this->getAnonymizeUserData());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isSnapshotReport', $this->getIsSnapshotReport());
        $writer->writeDateTimeValue('lastDataReceivedDateTime', $this->getLastDataReceivedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('logDataProvider', $this->getLogDataProvider());
        $writer->writeIntegerValue('logFileCount', $this->getLogFileCount());
        $writer->writeEnumValue('receiverProtocol', $this->getReceiverProtocol());
        $writer->writeCollectionOfEnumValues('supportedEntityTypes', $this->getSupportedEntityTypes());
        $writer->writeCollectionOfEnumValues('supportedTrafficTypes', $this->getSupportedTrafficTypes());
    }

    /**
     * Sets the anonymizeMachineData property value. Use 1 if the machine information is anonymized; otherwise use 0.
     * @param bool|null $value Value to set for the anonymizeMachineData property.
    */
    public function setAnonymizeMachineData(?bool $value): void {
        $this->getBackingStore()->set('anonymizeMachineData', $value);
    }

    /**
     * Sets the anonymizeUserData property value. Use 1 if the user information is anonymized; otherwise use 0.
     * @param bool|null $value Value to set for the anonymizeUserData property.
    */
    public function setAnonymizeUserData(?bool $value): void {
        $this->getBackingStore()->set('anonymizeUserData', $value);
    }

    /**
     * Sets the createdDateTime property value. The date in the format specified. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. A comment or description for the report.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the continuous report.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isSnapshotReport property value. Use 1 for a snapshot report; otherwise use 0.
     * @param bool|null $value Value to set for the isSnapshotReport property.
    */
    public function setIsSnapshotReport(?bool $value): void {
        $this->getBackingStore()->set('isSnapshotReport', $value);
    }

    /**
     * Sets the lastDataReceivedDateTime property value. The date when the data was last received. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastDataReceivedDateTime property.
    */
    public function setLastDataReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastDataReceivedDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date when the continuous report was last modified. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the logDataProvider property value. The applicable log data provider. Possible values are: barracuda, bluecoat, checkpoint, ciscoAsa, ciscoIronportProxy, fortigate, paloAlto, squid, zscaler, mcafeeSwg, ciscoScanSafe, juniperSrx, sophosSg, websenseV75, websenseSiemCef, machineZoneMeraki, squidNative, ciscoFwsm, microsoftIsaW3C, sonicwall, sophosCyberoam, clavister, customParser, juniperSsg, zscalerQradar, juniperSrxSd, juniperSrxWelf, microsoftConditionalAppAccess, ciscoAsaFirepower, genericCef, genericLeef, genericW3C, iFilter, checkpointXml, checkpointSmartViewTracker, barracudaNextGenFw, barracudaNextGenFwWeblog, microsoftDefenderForEndpoint, zscalerCef, sophosXg, iboss, forcepoint, fortios, ciscoIronportWsaIi, paloAltoLeef, forcepointLeef, stormshield, contentkeeper, ciscoIronportWsaIii, checkpointCef, corrata, ciscoFirepowerV6, menloSecurityCef, watchguardXtm, openSystemsSecureWebGateway, wandera, unknownFutureValue.
     * @param LogDataProvider|null $value Value to set for the logDataProvider property.
    */
    public function setLogDataProvider(?LogDataProvider $value): void {
        $this->getBackingStore()->set('logDataProvider', $value);
    }

    /**
     * Sets the logFileCount property value. The count of log files history.
     * @param int|null $value Value to set for the logFileCount property.
    */
    public function setLogFileCount(?int $value): void {
        $this->getBackingStore()->set('logFileCount', $value);
    }

    /**
     * Sets the receiverProtocol property value. The applicable receiver protocol. Possible values are: ftp, ftps, syslogUdp, syslogTcp, syslogTls, unknownFutureValue.
     * @param ReceiverProtocol|null $value Value to set for the receiverProtocol property.
    */
    public function setReceiverProtocol(?ReceiverProtocol $value): void {
        $this->getBackingStore()->set('receiverProtocol', $value);
    }

    /**
     * Sets the supportedEntityTypes property value. The supported entity type. Possible values are: userName, ipAddress, machineName, other, unknown, unknownFutureValue.
     * @param array<EntityType>|null $value Value to set for the supportedEntityTypes property.
    */
    public function setSupportedEntityTypes(?array $value): void {
        $this->getBackingStore()->set('supportedEntityTypes', $value);
    }

    /**
     * Sets the supportedTrafficTypes property value. The supported traffic type. Possible values are: downloadedBytes, uploadedBytes, unknown, unknownFutureValue.
     * @param array<TrafficType>|null $value Value to set for the supportedTrafficTypes property.
    */
    public function setSupportedTrafficTypes(?array $value): void {
        $this->getBackingStore()->set('supportedTrafficTypes', $value);
    }

}
