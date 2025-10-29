<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class User implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new User and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return User
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): User {
        return new User();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. User display Name.
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
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'firstAccessDateTime' => fn(ParseNode $n) => $o->setFirstAccessDateTime($n->getDateTimeValue()),
            'lastAccessDateTime' => fn(ParseNode $n) => $o->setLastAccessDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalBytesReceived' => fn(ParseNode $n) => $o->setTotalBytesReceived($n->getIntegerValue()),
            'totalBytesSent' => fn(ParseNode $n) => $o->setTotalBytesSent($n->getIntegerValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(UserType::class)),
        ];
    }

    /**
     * Gets the firstAccessDateTime property value. The firstAccessDateTime property
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
     * Gets the lastAccessDateTime property value. The date and time of the most recent access.
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
     * Gets the totalBytesReceived property value. The totalBytesReceived property
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
     * Gets the totalBytesSent property value. The totalBytesSent property
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
     * Gets the transactionCount property value. The transactionCount property
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
     * Gets the userId property value. The ID for the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. A unique identifier that is associated with a user in a system or directory. Typically, this value is an email address that is used for user authentication and identification.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userType property value. The userType property
     * @return UserType|null
    */
    public function getUserType(): ?UserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof UserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('firstAccessDateTime', $this->getFirstAccessDateTime());
        $writer->writeDateTimeValue('lastAccessDateTime', $this->getLastAccessDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalBytesReceived', $this->getTotalBytesReceived());
        $writer->writeIntegerValue('totalBytesSent', $this->getTotalBytesSent());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeEnumValue('userType', $this->getUserType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the displayName property value. User display Name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the firstAccessDateTime property value. The firstAccessDateTime property
     * @param DateTime|null $value Value to set for the firstAccessDateTime property.
    */
    public function setFirstAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstAccessDateTime', $value);
    }

    /**
     * Sets the lastAccessDateTime property value. The date and time of the most recent access.
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
     * Sets the totalBytesReceived property value. The totalBytesReceived property
     * @param int|null $value Value to set for the totalBytesReceived property.
    */
    public function setTotalBytesReceived(?int $value): void {
        $this->getBackingStore()->set('totalBytesReceived', $value);
    }

    /**
     * Sets the totalBytesSent property value. The totalBytesSent property
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
     * Sets the transactionCount property value. The transactionCount property
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the userId property value. The ID for the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. A unique identifier that is associated with a user in a system or directory. Typically, this value is an email address that is used for user authentication and identification.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. The userType property
     * @param UserType|null $value Value to set for the userType property.
    */
    public function setUserType(?UserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
