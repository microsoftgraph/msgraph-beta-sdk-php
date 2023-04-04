<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkEnrollmentProfile extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('accountId');
    }

    /**
     * Gets the createdDateTime property value. Date time the enrollment profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description for the enrollment profile.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name for the enrollment profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        return $this->getBackingStore()->get('enrolledDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrolledDeviceCount' => fn(ParseNode $n) => $o->setEnrolledDeviceCount($n->getIntegerValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'qrCodeContent' => fn(ParseNode $n) => $o->setQrCodeContent($n->getStringValue()),
            'qrCodeImage' => fn(ParseNode $n) => $o->setQrCodeImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'tokenExpirationDateTime' => fn(ParseNode $n) => $o->setTokenExpirationDateTime($n->getDateTimeValue()),
            'tokenValue' => fn(ParseNode $n) => $o->setTokenValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the qrCodeContent property value. String used to generate a QR code for the token.
     * @return string|null
    */
    public function getQrCodeContent(): ?string {
        return $this->getBackingStore()->get('qrCodeContent');
    }

    /**
     * Gets the qrCodeImage property value. String used to generate a QR code for the token.
     * @return MimeContent|null
    */
    public function getQrCodeImage(): ?MimeContent {
        return $this->getBackingStore()->get('qrCodeImage');
    }

    /**
     * Gets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('tokenExpirationDateTime');
    }

    /**
     * Gets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     * @return string|null
    */
    public function getTokenValue(): ?string {
        return $this->getBackingStore()->get('tokenValue');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('enrolledDeviceCount', $this->getEnrolledDeviceCount());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('qrCodeContent', $this->getQrCodeContent());
        $writer->writeObjectValue('qrCodeImage', $this->getQrCodeImage());
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->getTokenExpirationDateTime());
        $writer->writeStringValue('tokenValue', $this->getTokenValue());
    }

    /**
     * Sets the accountId property value. Tenant GUID the enrollment profile belongs to.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date time the enrollment profile was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description for the enrollment profile.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the enrollment profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     * @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('enrolledDeviceCount', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the qrCodeContent property value. String used to generate a QR code for the token.
     * @param string|null $value Value to set for the qrCodeContent property.
    */
    public function setQrCodeContent(?string $value): void {
        $this->getBackingStore()->set('qrCodeContent', $value);
    }

    /**
     * Sets the qrCodeImage property value. String used to generate a QR code for the token.
     * @param MimeContent|null $value Value to set for the qrCodeImage property.
    */
    public function setQrCodeImage(?MimeContent $value): void {
        $this->getBackingStore()->set('qrCodeImage', $value);
    }

    /**
     * Sets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     * @param DateTime|null $value Value to set for the tokenExpirationDateTime property.
    */
    public function setTokenExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('tokenExpirationDateTime', $value);
    }

    /**
     * Sets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     * @param string|null $value Value to set for the tokenValue property.
    */
    public function setTokenValue(?string $value): void {
        $this->getBackingStore()->set('tokenValue', $value);
    }

}
