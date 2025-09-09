<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EnterpriseApplicationReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EnterpriseApplicationReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnterpriseApplicationReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnterpriseApplicationReport {
        return new EnterpriseApplicationReport();
    }

    /**
     * Gets the accessType property value. The type of accessed application. The possible values are: quickAccess, privateAccess, unknownFutureValue, appAccess. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: appAccess.
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
        $val = $this->getBackingStore()->get('accessType');
        if (is_null($val) || $val instanceof AccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessType'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the applicationId property value. The unique identifier for the enterprise application (appId) in Microsoft Entra ID.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        $val = $this->getBackingStore()->get('applicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationId'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceCount property value. Number of devices that accessed this application.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(AccessType::class)),
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'firstAccessDateTime' => fn(ParseNode $n) => $o->setFirstAccessDateTime($n->getDateTimeValue()),
            'lastAccessDateTime' => fn(ParseNode $n) => $o->setLastAccessDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalBytesReceived' => fn(ParseNode $n) => $o->setTotalBytesReceived($n->getIntegerValue()),
            'totalBytesSent' => fn(ParseNode $n) => $o->setTotalBytesSent($n->getIntegerValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the firstAccessDateTime property value. Timestamp of the first access to the application.
     * @return DateTime|null
    */
    public function getFirstAccessDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstAccessDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstAccessDateTime'");
    }

    /**
     * Gets the lastAccessDateTime property value. Timestamp of the last access to the application.
     * @return DateTime|null
    */
    public function getLastAccessDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAccessDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAccessDateTime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the totalBytesReceived property value. Total bytes received from the application.
     * @return int|null
    */
    public function getTotalBytesReceived(): ?int {
        $val = $this->getBackingStore()->get('totalBytesReceived');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBytesReceived'");
    }

    /**
     * Gets the totalBytesSent property value. Total bytes sent to the application.
     * @return int|null
    */
    public function getTotalBytesSent(): ?int {
        $val = $this->getBackingStore()->get('totalBytesSent');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBytesSent'");
    }

    /**
     * Gets the trafficType property value. The trafficType property
     * @return TrafficType|null
    */
    public function getTrafficType(): ?TrafficType {
        $val = $this->getBackingStore()->get('trafficType');
        if (is_null($val) || $val instanceof TrafficType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trafficType'");
    }

    /**
     * Gets the transactionCount property value. Number of transactions to this application.
     * @return int|null
    */
    public function getTransactionCount(): ?int {
        $val = $this->getBackingStore()->get('transactionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionCount'");
    }

    /**
     * Gets the userCount property value. Number of users that accessed this application.
     * @return int|null
    */
    public function getUserCount(): ?int {
        $val = $this->getBackingStore()->get('userCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeDateTimeValue('firstAccessDateTime', $this->getFirstAccessDateTime());
        $writer->writeDateTimeValue('lastAccessDateTime', $this->getLastAccessDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalBytesReceived', $this->getTotalBytesReceived());
        $writer->writeIntegerValue('totalBytesSent', $this->getTotalBytesSent());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessType property value. The type of accessed application. The possible values are: quickAccess, privateAccess, unknownFutureValue, appAccess. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: appAccess.
     * @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationId property value. The unique identifier for the enterprise application (appId) in Microsoft Entra ID.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceCount property value. Number of devices that accessed this application.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the firstAccessDateTime property value. Timestamp of the first access to the application.
     * @param DateTime|null $value Value to set for the firstAccessDateTime property.
    */
    public function setFirstAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstAccessDateTime', $value);
    }

    /**
     * Sets the lastAccessDateTime property value. Timestamp of the last access to the application.
     * @param DateTime|null $value Value to set for the lastAccessDateTime property.
    */
    public function setLastAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAccessDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalBytesReceived property value. Total bytes received from the application.
     * @param int|null $value Value to set for the totalBytesReceived property.
    */
    public function setTotalBytesReceived(?int $value): void {
        $this->getBackingStore()->set('totalBytesReceived', $value);
    }

    /**
     * Sets the totalBytesSent property value. Total bytes sent to the application.
     * @param int|null $value Value to set for the totalBytesSent property.
    */
    public function setTotalBytesSent(?int $value): void {
        $this->getBackingStore()->set('totalBytesSent', $value);
    }

    /**
     * Sets the trafficType property value. The trafficType property
     * @param TrafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?TrafficType $value): void {
        $this->getBackingStore()->set('trafficType', $value);
    }

    /**
     * Sets the transactionCount property value. Number of transactions to this application.
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the userCount property value. Number of users that accessed this application.
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

}
