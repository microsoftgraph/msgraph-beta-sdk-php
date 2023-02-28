<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CloudPcDeviceImage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcDeviceImage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDeviceImage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDeviceImage {
        return new CloudPcDeviceImage();
    }

    /**
     * Gets the displayName property value. The image's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the expirationDate property value. The date the image became unavailable.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->getBackingStore()->get('expirationDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osStatus' => fn(ParseNode $n) => $o->setOsStatus($n->getEnumValue(CloudPcDeviceImageOsStatus::class)),
            'sourceImageResourceId' => fn(ParseNode $n) => $o->setSourceImageResourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcDeviceImageStatus::class)),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getEnumValue(CloudPcDeviceImageStatusDetails::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the operatingSystem property value. The image's operating system. For example: Windows 10 Enterprise.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->getBackingStore()->get('operatingSystem');
    }

    /**
     * Gets the osBuildNumber property value. The image's OS build version. For example: 1909.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->getBackingStore()->get('osBuildNumber');
    }

    /**
     * Gets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     * @return CloudPcDeviceImageOsStatus|null
    */
    public function getOsStatus(): ?CloudPcDeviceImageOsStatus {
        return $this->getBackingStore()->get('osStatus');
    }

    /**
     * Gets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'.
     * @return string|null
    */
    public function getSourceImageResourceId(): ?string {
        return $this->getBackingStore()->get('sourceImageResourceId');
    }

    /**
     * Gets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     * @return CloudPcDeviceImageStatus|null
    */
    public function getStatus(): ?CloudPcDeviceImageStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the statusDetails property value. The details of the image's status, which indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     * @return CloudPcDeviceImageStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcDeviceImageStatusDetails {
        return $this->getBackingStore()->get('statusDetails');
    }

    /**
     * Gets the version property value. The image version. For example: 0.0.1, 1.5.13.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('expirationDate', $this->getExpirationDate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeEnumValue('osStatus', $this->getOsStatus());
        $writer->writeStringValue('sourceImageResourceId', $this->getSourceImageResourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('statusDetails', $this->getStatusDetails());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The image's display name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expirationDate property value. The date the image became unavailable.
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operatingSystem property value. The image's operating system. For example: Windows 10 Enterprise.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the osBuildNumber property value. The image's OS build version. For example: 1909.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     * @param CloudPcDeviceImageOsStatus|null $value Value to set for the osStatus property.
    */
    public function setOsStatus(?CloudPcDeviceImageOsStatus $value): void {
        $this->getBackingStore()->set('osStatus', $value);
    }

    /**
     * Sets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'.
     * @param string|null $value Value to set for the sourceImageResourceId property.
    */
    public function setSourceImageResourceId(?string $value): void {
        $this->getBackingStore()->set('sourceImageResourceId', $value);
    }

    /**
     * Sets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     * @param CloudPcDeviceImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcDeviceImageStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetails property value. The details of the image's status, which indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     * @param CloudPcDeviceImageStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcDeviceImageStatusDetails $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

    /**
     * Sets the version property value. The image version. For example: 0.0.1, 1.5.13.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
