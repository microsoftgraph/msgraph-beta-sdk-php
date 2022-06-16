<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerEnrollmentProfile extends Entity 
{
    /** @var string|null $accountId Tenant GUID the enrollment profile belongs to. */
    private ?string $accountId = null;
    
    /** @var DateTime|null $createdDateTime Date time the enrollment profile was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Description for the enrollment profile. */
    private ?string $description = null;
    
    /** @var string|null $displayName Display name for the enrollment profile. */
    private ?string $displayName = null;
    
    /** @var int|null $enrolledDeviceCount Total number of Android devices that have enrolled using this enrollment profile. */
    private ?int $enrolledDeviceCount = null;
    
    /** @var AndroidDeviceOwnerEnrollmentMode|null $enrollmentMode The enrollment mode of devices that use this enrollment profile. Possible values are: corporateOwnedDedicatedDevice, corporateOwnedFullyManaged, corporateOwnedWorkProfile, corporateOwnedAOSPUserlessDevice, corporateOwnedAOSPUserAssociatedDevice. */
    private ?AndroidDeviceOwnerEnrollmentMode $enrollmentMode = null;
    
    /** @var AndroidDeviceOwnerEnrollmentTokenType|null $enrollmentTokenType The enrollment token type for an enrollment profile. Possible values are: default, corporateOwnedDedicatedDeviceWithAzureADSharedMode. */
    private ?AndroidDeviceOwnerEnrollmentTokenType $enrollmentTokenType = null;
    
    /** @var int|null $enrollmentTokenUsageCount Total number of AOSP devices that have enrolled using the current token. */
    private ?int $enrollmentTokenUsageCount = null;
    
    /** @var DateTime|null $lastModifiedDateTime Date time the enrollment profile was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $qrCodeContent String used to generate a QR code for the token. */
    private ?string $qrCodeContent = null;
    
    /** @var MimeContent|null $qrCodeImage String used to generate a QR code for the token. */
    private ?MimeContent $qrCodeImage = null;
    
    /** @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance. */
    private ?array $roleScopeTagIds = null;
    
    /** @var DateTime|null $tokenCreationDateTime Date time the most recently created token was created. */
    private ?DateTime $tokenCreationDateTime = null;
    
    /** @var DateTime|null $tokenExpirationDateTime Date time the most recently created token will expire. */
    private ?DateTime $tokenExpirationDateTime = null;
    
    /** @var string|null $tokenValue Value of the most recently created token for this enrollment profile. */
    private ?string $tokenValue = null;
    
    /** @var bool|null $wifiHidden Boolean that indicates if hidden wifi networks are enabled */
    private ?bool $wifiHidden = null;
    
    /** @var string|null $wifiPassword String that contains the wi-fi login password */
    private ?string $wifiPassword = null;
    
    /** @var AospWifiSecurityType|null $wifiSecurityType String that contains the wi-fi security type. Possible values are: none, wpa, wep. */
    private ?AospWifiSecurityType $wifiSecurityType = null;
    
    /** @var string|null $wifiSsid String that contains the wi-fi login ssid */
    private ?string $wifiSsid = null;
    
    /**
     * Instantiates a new androidDeviceOwnerEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerEnrollmentProfile {
        return new AndroidDeviceOwnerEnrollmentProfile();
    }

    /**
     * Gets the accountId property value. Tenant GUID the enrollment profile belongs to.
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the createdDateTime property value. Date time the enrollment profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description for the enrollment profile.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for the enrollment profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        return $this->enrolledDeviceCount;
    }

    /**
     * Gets the enrollmentMode property value. The enrollment mode of devices that use this enrollment profile. Possible values are: corporateOwnedDedicatedDevice, corporateOwnedFullyManaged, corporateOwnedWorkProfile, corporateOwnedAOSPUserlessDevice, corporateOwnedAOSPUserAssociatedDevice.
     * @return AndroidDeviceOwnerEnrollmentMode|null
    */
    public function getEnrollmentMode(): ?AndroidDeviceOwnerEnrollmentMode {
        return $this->enrollmentMode;
    }

    /**
     * Gets the enrollmentTokenType property value. The enrollment token type for an enrollment profile. Possible values are: default, corporateOwnedDedicatedDeviceWithAzureADSharedMode.
     * @return AndroidDeviceOwnerEnrollmentTokenType|null
    */
    public function getEnrollmentTokenType(): ?AndroidDeviceOwnerEnrollmentTokenType {
        return $this->enrollmentTokenType;
    }

    /**
     * Gets the enrollmentTokenUsageCount property value. Total number of AOSP devices that have enrolled using the current token.
     * @return int|null
    */
    public function getEnrollmentTokenUsageCount(): ?int {
        return $this->enrollmentTokenUsageCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => function (self $o, ParseNode $n) { $o->setAccountId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'enrolledDeviceCount' => function (self $o, ParseNode $n) { $o->setEnrolledDeviceCount($n->getIntegerValue()); },
            'enrollmentMode' => function (self $o, ParseNode $n) { $o->setEnrollmentMode($n->getEnumValue(AndroidDeviceOwnerEnrollmentMode::class)); },
            'enrollmentTokenType' => function (self $o, ParseNode $n) { $o->setEnrollmentTokenType($n->getEnumValue(AndroidDeviceOwnerEnrollmentTokenType::class)); },
            'enrollmentTokenUsageCount' => function (self $o, ParseNode $n) { $o->setEnrollmentTokenUsageCount($n->getIntegerValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'qrCodeContent' => function (self $o, ParseNode $n) { $o->setQrCodeContent($n->getStringValue()); },
            'qrCodeImage' => function (self $o, ParseNode $n) { $o->setQrCodeImage($n->getObjectValue(MimeContent::class)); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'tokenCreationDateTime' => function (self $o, ParseNode $n) { $o->setTokenCreationDateTime($n->getDateTimeValue()); },
            'tokenExpirationDateTime' => function (self $o, ParseNode $n) { $o->setTokenExpirationDateTime($n->getDateTimeValue()); },
            'tokenValue' => function (self $o, ParseNode $n) { $o->setTokenValue($n->getStringValue()); },
            'wifiHidden' => function (self $o, ParseNode $n) { $o->setWifiHidden($n->getBooleanValue()); },
            'wifiPassword' => function (self $o, ParseNode $n) { $o->setWifiPassword($n->getStringValue()); },
            'wifiSecurityType' => function (self $o, ParseNode $n) { $o->setWifiSecurityType($n->getEnumValue(AospWifiSecurityType::class)); },
            'wifiSsid' => function (self $o, ParseNode $n) { $o->setWifiSsid($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the qrCodeContent property value. String used to generate a QR code for the token.
     * @return string|null
    */
    public function getQrCodeContent(): ?string {
        return $this->qrCodeContent;
    }

    /**
     * Gets the qrCodeImage property value. String used to generate a QR code for the token.
     * @return MimeContent|null
    */
    public function getQrCodeImage(): ?MimeContent {
        return $this->qrCodeImage;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the tokenCreationDateTime property value. Date time the most recently created token was created.
     * @return DateTime|null
    */
    public function getTokenCreationDateTime(): ?DateTime {
        return $this->tokenCreationDateTime;
    }

    /**
     * Gets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        return $this->tokenExpirationDateTime;
    }

    /**
     * Gets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     * @return string|null
    */
    public function getTokenValue(): ?string {
        return $this->tokenValue;
    }

    /**
     * Gets the wifiHidden property value. Boolean that indicates if hidden wifi networks are enabled
     * @return bool|null
    */
    public function getWifiHidden(): ?bool {
        return $this->wifiHidden;
    }

    /**
     * Gets the wifiPassword property value. String that contains the wi-fi login password
     * @return string|null
    */
    public function getWifiPassword(): ?string {
        return $this->wifiPassword;
    }

    /**
     * Gets the wifiSecurityType property value. String that contains the wi-fi security type. Possible values are: none, wpa, wep.
     * @return AospWifiSecurityType|null
    */
    public function getWifiSecurityType(): ?AospWifiSecurityType {
        return $this->wifiSecurityType;
    }

    /**
     * Gets the wifiSsid property value. String that contains the wi-fi login ssid
     * @return string|null
    */
    public function getWifiSsid(): ?string {
        return $this->wifiSsid;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->accountId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('enrolledDeviceCount', $this->enrolledDeviceCount);
        $writer->writeEnumValue('enrollmentMode', $this->enrollmentMode);
        $writer->writeEnumValue('enrollmentTokenType', $this->enrollmentTokenType);
        $writer->writeIntegerValue('enrollmentTokenUsageCount', $this->enrollmentTokenUsageCount);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('qrCodeContent', $this->qrCodeContent);
        $writer->writeObjectValue('qrCodeImage', $this->qrCodeImage);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeDateTimeValue('tokenCreationDateTime', $this->tokenCreationDateTime);
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->tokenExpirationDateTime);
        $writer->writeStringValue('tokenValue', $this->tokenValue);
        $writer->writeBooleanValue('wifiHidden', $this->wifiHidden);
        $writer->writeStringValue('wifiPassword', $this->wifiPassword);
        $writer->writeEnumValue('wifiSecurityType', $this->wifiSecurityType);
        $writer->writeStringValue('wifiSsid', $this->wifiSsid);
    }

    /**
     * Sets the accountId property value. Tenant GUID the enrollment profile belongs to.
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the createdDateTime property value. Date time the enrollment profile was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description for the enrollment profile.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for the enrollment profile.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     *  @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value ): void {
        $this->enrolledDeviceCount = $value;
    }

    /**
     * Sets the enrollmentMode property value. The enrollment mode of devices that use this enrollment profile. Possible values are: corporateOwnedDedicatedDevice, corporateOwnedFullyManaged, corporateOwnedWorkProfile, corporateOwnedAOSPUserlessDevice, corporateOwnedAOSPUserAssociatedDevice.
     *  @param AndroidDeviceOwnerEnrollmentMode|null $value Value to set for the enrollmentMode property.
    */
    public function setEnrollmentMode(?AndroidDeviceOwnerEnrollmentMode $value ): void {
        $this->enrollmentMode = $value;
    }

    /**
     * Sets the enrollmentTokenType property value. The enrollment token type for an enrollment profile. Possible values are: default, corporateOwnedDedicatedDeviceWithAzureADSharedMode.
     *  @param AndroidDeviceOwnerEnrollmentTokenType|null $value Value to set for the enrollmentTokenType property.
    */
    public function setEnrollmentTokenType(?AndroidDeviceOwnerEnrollmentTokenType $value ): void {
        $this->enrollmentTokenType = $value;
    }

    /**
     * Sets the enrollmentTokenUsageCount property value. Total number of AOSP devices that have enrolled using the current token.
     *  @param int|null $value Value to set for the enrollmentTokenUsageCount property.
    */
    public function setEnrollmentTokenUsageCount(?int $value ): void {
        $this->enrollmentTokenUsageCount = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the qrCodeContent property value. String used to generate a QR code for the token.
     *  @param string|null $value Value to set for the qrCodeContent property.
    */
    public function setQrCodeContent(?string $value ): void {
        $this->qrCodeContent = $value;
    }

    /**
     * Sets the qrCodeImage property value. String used to generate a QR code for the token.
     *  @param MimeContent|null $value Value to set for the qrCodeImage property.
    */
    public function setQrCodeImage(?MimeContent $value ): void {
        $this->qrCodeImage = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the tokenCreationDateTime property value. Date time the most recently created token was created.
     *  @param DateTime|null $value Value to set for the tokenCreationDateTime property.
    */
    public function setTokenCreationDateTime(?DateTime $value ): void {
        $this->tokenCreationDateTime = $value;
    }

    /**
     * Sets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     *  @param DateTime|null $value Value to set for the tokenExpirationDateTime property.
    */
    public function setTokenExpirationDateTime(?DateTime $value ): void {
        $this->tokenExpirationDateTime = $value;
    }

    /**
     * Sets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     *  @param string|null $value Value to set for the tokenValue property.
    */
    public function setTokenValue(?string $value ): void {
        $this->tokenValue = $value;
    }

    /**
     * Sets the wifiHidden property value. Boolean that indicates if hidden wifi networks are enabled
     *  @param bool|null $value Value to set for the wifiHidden property.
    */
    public function setWifiHidden(?bool $value ): void {
        $this->wifiHidden = $value;
    }

    /**
     * Sets the wifiPassword property value. String that contains the wi-fi login password
     *  @param string|null $value Value to set for the wifiPassword property.
    */
    public function setWifiPassword(?string $value ): void {
        $this->wifiPassword = $value;
    }

    /**
     * Sets the wifiSecurityType property value. String that contains the wi-fi security type. Possible values are: none, wpa, wep.
     *  @param AospWifiSecurityType|null $value Value to set for the wifiSecurityType property.
    */
    public function setWifiSecurityType(?AospWifiSecurityType $value ): void {
        $this->wifiSecurityType = $value;
    }

    /**
     * Sets the wifiSsid property value. String that contains the wi-fi login ssid
     *  @param string|null $value Value to set for the wifiSsid property.
    */
    public function setWifiSsid(?string $value ): void {
        $this->wifiSsid = $value;
    }

}
