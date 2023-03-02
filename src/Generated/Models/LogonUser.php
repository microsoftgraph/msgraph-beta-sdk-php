<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LogonUser implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new logonUser and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogonUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogonUser {
        return new LogonUser();
    }

    /**
     * Gets the accountDomain property value. Domain of user account used to logon.
     * @return string|null
    */
    public function getAccountDomain(): ?string {
        return $this->getBackingStore()->get('accountDomain');
    }

    /**
     * Gets the accountName property value. Account name of user account used to logon.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the accountType property value. User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
     * @return UserAccountSecurityType|null
    */
    public function getAccountType(): ?UserAccountSecurityType {
        return $this->getBackingStore()->get('accountType');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountDomain' => fn(ParseNode $n) => $o->setAccountDomain($n->getStringValue()),
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'accountType' => fn(ParseNode $n) => $o->setAccountType($n->getEnumValue(UserAccountSecurityType::class)),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'logonId' => fn(ParseNode $n) => $o->setLogonId($n->getStringValue()),
            'logonTypes' => fn(ParseNode $n) => $o->setLogonTypes($n->getCollectionOfEnumValues(LogonType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstSeenDateTime property value. DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the lastSeenDateTime property value. DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSeenDateTime');
    }

    /**
     * Gets the logonId property value. User logon ID.
     * @return string|null
    */
    public function getLogonId(): ?string {
        return $this->getBackingStore()->get('logonId');
    }

    /**
     * Gets the logonTypes property value. Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     * @return array<LogonType>|null
    */
    public function getLogonTypes(): ?array {
        return $this->getBackingStore()->get('logonTypes');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountDomain', $this->getAccountDomain());
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeEnumValue('accountType', $this->getAccountType());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('logonId', $this->getLogonId());
        $writer->writeCollectionOfEnumValues('logonTypes', $this->getLogonTypes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountDomain property value. Domain of user account used to logon.
     * @param string|null $value Value to set for the accountDomain property.
    */
    public function setAccountDomain(?string $value): void {
        $this->getBackingStore()->set('accountDomain', $value);
    }

    /**
     * Sets the accountName property value. Account name of user account used to logon.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the accountType property value. User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
     * @param UserAccountSecurityType|null $value Value to set for the accountType property.
    */
    public function setAccountType(?UserAccountSecurityType $value): void {
        $this->getBackingStore()->set('accountType', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the logonId property value. User logon ID.
     * @param string|null $value Value to set for the logonId property.
    */
    public function setLogonId(?string $value): void {
        $this->getBackingStore()->set('logonId', $value);
    }

    /**
     * Sets the logonTypes property value. Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     * @param array<LogonType>|null $value Value to set for the logonTypes property.
    */
    public function setLogonTypes(?array $value): void {
        $this->getBackingStore()->set('logonTypes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
