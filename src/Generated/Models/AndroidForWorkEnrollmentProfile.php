<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkEnrollmentProfile extends Entity implements Parsable 
{
    /**
     * @var string|null $accountId Tenant GUID the enrollment profile belongs to.
    */
    private ?string $accountId = null;
    
    /**
     * @var DateTime|null $createdDateTime Date time the enrollment profile was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description for the enrollment profile.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name for the enrollment profile.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $enrolledDeviceCount Total number of Android devices that have enrolled using this enrollment profile.
    */
    private ?int $enrolledDeviceCount = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Date time the enrollment profile was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $qrCodeContent String used to generate a QR code for the token.
    */
    private ?string $qrCodeContent = null;
    
    /**
     * @var MimeContent|null $qrCodeImage String used to generate a QR code for the token.
    */
    private ?MimeContent $qrCodeImage = null;
    
    /**
     * @var DateTime|null $tokenExpirationDateTime Date time the most recently created token will expire.
    */
    private ?DateTime $tokenExpirationDateTime = null;
    
    /**
     * @var string|null $tokenValue Value of the most recently created token for this enrollment profile.
    */
    private ?string $tokenValue = null;
    
    /**
     * Instantiates a new AndroidForWorkEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkEnrollmentProfile {
        return new AndroidForWorkEnrollmentProfile();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => function (ParseNode $n) use ($o) { $o->setAccountId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enrolledDeviceCount' => function (ParseNode $n) use ($o) { $o->setEnrolledDeviceCount($n->getIntegerValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'qrCodeContent' => function (ParseNode $n) use ($o) { $o->setQrCodeContent($n->getStringValue()); },
            'qrCodeImage' => function (ParseNode $n) use ($o) { $o->setQrCodeImage($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
            'tokenExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setTokenExpirationDateTime($n->getDateTimeValue()); },
            'tokenValue' => function (ParseNode $n) use ($o) { $o->setTokenValue($n->getStringValue()); },
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
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('qrCodeContent', $this->qrCodeContent);
        $writer->writeObjectValue('qrCodeImage', $this->qrCodeImage);
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->tokenExpirationDateTime);
        $writer->writeStringValue('tokenValue', $this->tokenValue);
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

}
