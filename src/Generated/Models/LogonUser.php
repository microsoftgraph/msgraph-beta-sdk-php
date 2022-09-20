<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LogonUser implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountDomain Domain of user account used to logon.
    */
    private ?string $accountDomain = null;
    
    /**
     * @var string|null $accountName Account name of user account used to logon.
    */
    private ?string $accountName = null;
    
    /**
     * @var UserAccountSecurityType|null $accountType User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
    */
    private ?UserAccountSecurityType $accountType = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $firstSeenDateTime DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var string|null $logonId User logon ID.
    */
    private ?string $logonId = null;
    
    /**
     * @var array<LogonType>|null $logonTypes Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
    */
    private ?array $logonTypes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new logonUser and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.logonUser');
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
        return $this->accountDomain;
    }

    /**
     * Gets the accountName property value. Account name of user account used to logon.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
    }

    /**
     * Gets the accountType property value. User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
     * @return UserAccountSecurityType|null
    */
    public function getAccountType(): ?UserAccountSecurityType {
        return $this->accountType;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountDomain' => function (ParseNode $n) use ($o) { $o->setAccountDomain($n->getStringValue()); },
            'accountName' => function (ParseNode $n) use ($o) { $o->setAccountName($n->getStringValue()); },
            'accountType' => function (ParseNode $n) use ($o) { $o->setAccountType($n->getEnumValue(UserAccountSecurityType::class)); },
            'firstSeenDateTime' => function (ParseNode $n) use ($o) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'lastSeenDateTime' => function (ParseNode $n) use ($o) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'logonId' => function (ParseNode $n) use ($o) { $o->setLogonId($n->getStringValue()); },
            'logonTypes' => function (ParseNode $n) use ($o) { $o->setLogonTypes($n->getCollectionOfEnumValues(LogonType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the firstSeenDateTime property value. DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the lastSeenDateTime property value. DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the logonId property value. User logon ID.
     * @return string|null
    */
    public function getLogonId(): ?string {
        return $this->logonId;
    }

    /**
     * Gets the logonTypes property value. Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     * @return array<LogonType>|null
    */
    public function getLogonTypes(): ?array {
        return $this->logonTypes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountDomain', $this->accountDomain);
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeEnumValue('accountType', $this->accountType);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeStringValue('logonId', $this->logonId);
        $writer->writeCollectionOfEnumValues('logonTypes', $this->logonTypes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountDomain property value. Domain of user account used to logon.
     *  @param string|null $value Value to set for the accountDomain property.
    */
    public function setAccountDomain(?string $value ): void {
        $this->accountDomain = $value;
    }

    /**
     * Sets the accountName property value. Account name of user account used to logon.
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the accountType property value. User Account type, per Windows definition. Possible values are: unknown, standard, power, administrator.
     *  @param UserAccountSecurityType|null $value Value to set for the accountType property.
    */
    public function setAccountType(?UserAccountSecurityType $value ): void {
        $this->accountType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. DateTime at which the earliest logon by this user account occurred (provider-determined period). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. DateTime at which the latest logon by this user account occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the logonId property value. User logon ID.
     *  @param string|null $value Value to set for the logonId property.
    */
    public function setLogonId(?string $value ): void {
        $this->logonId = $value;
    }

    /**
     * Sets the logonTypes property value. Collection of the logon types observed for the logged on user from when first to last seen. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     *  @param array<LogonType>|null $value Value to set for the logonTypes property.
    */
    public function setLogonTypes(?array $value ): void {
        $this->logonTypes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
