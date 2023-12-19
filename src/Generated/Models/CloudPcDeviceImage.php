<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcDeviceImage extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcDeviceImage and sets the default values.
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
     * Gets the displayName property value. The display name of the image.
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
     * Gets the errorCode property value. The errorCode property
     * @return CloudPcDeviceImage_errorCode|null
    */
    public function getErrorCode(): ?CloudPcDeviceImage_errorCode {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || $val instanceof CloudPcDeviceImage_errorCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * Gets the expirationDate property value. The date the image became unavailable.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        $val = $this->getBackingStore()->get('expirationDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getEnumValue(CloudPcDeviceImage_errorCode::class)),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osStatus' => fn(ParseNode $n) => $o->setOsStatus($n->getEnumValue(CloudPcDeviceImage_osStatus::class)),
            'scopeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScopeIds($val);
            },
            'sourceImageResourceId' => fn(ParseNode $n) => $o->setSourceImageResourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcDeviceImage_status::class)),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getEnumValue(CloudPcDeviceImage_statusDetails::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
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
     * Gets the operatingSystem property value. The operating system of the image. For example, Windows 10 Enterprise.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the osBuildNumber property value. The OS build version of the image. For example, 1909.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        $val = $this->getBackingStore()->get('osBuildNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuildNumber'");
    }

    /**
     * Gets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     * @return CloudPcDeviceImage_osStatus|null
    */
    public function getOsStatus(): ?CloudPcDeviceImage_osStatus {
        $val = $this->getBackingStore()->get('osStatus');
        if (is_null($val) || $val instanceof CloudPcDeviceImage_osStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osStatus'");
    }

    /**
     * Gets the scopeIds property value. The scopeIds property
     * @return array<string>|null
    */
    public function getScopeIds(): ?array {
        $val = $this->getBackingStore()->get('scopeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeIds'");
    }

    /**
     * Gets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}.
     * @return string|null
    */
    public function getSourceImageResourceId(): ?string {
        $val = $this->getBackingStore()->get('sourceImageResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceImageResourceId'");
    }

    /**
     * Gets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     * @return CloudPcDeviceImage_status|null
    */
    public function getStatus(): ?CloudPcDeviceImage_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcDeviceImage_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the statusDetails property value. The details of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     * @return CloudPcDeviceImage_statusDetails|null
    */
    public function getStatusDetails(): ?CloudPcDeviceImage_statusDetails {
        $val = $this->getBackingStore()->get('statusDetails');
        if (is_null($val) || $val instanceof CloudPcDeviceImage_statusDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetails'");
    }

    /**
     * Gets the version property value. The image version. For example, 0.0.1 and 1.5.13.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('errorCode', $this->getErrorCode());
        $writer->writeDateValue('expirationDate', $this->getExpirationDate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeEnumValue('osStatus', $this->getOsStatus());
        $writer->writeCollectionOfPrimitiveValues('scopeIds', $this->getScopeIds());
        $writer->writeStringValue('sourceImageResourceId', $this->getSourceImageResourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('statusDetails', $this->getStatusDetails());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The display name of the image.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errorCode property value. The errorCode property
     * @param CloudPcDeviceImage_errorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?CloudPcDeviceImage_errorCode $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the expirationDate property value. The date the image became unavailable.
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operatingSystem property value. The operating system of the image. For example, Windows 10 Enterprise.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the osBuildNumber property value. The OS build version of the image. For example, 1909.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     * @param CloudPcDeviceImage_osStatus|null $value Value to set for the osStatus property.
    */
    public function setOsStatus(?CloudPcDeviceImage_osStatus $value): void {
        $this->getBackingStore()->set('osStatus', $value);
    }

    /**
     * Sets the scopeIds property value. The scopeIds property
     * @param array<string>|null $value Value to set for the scopeIds property.
    */
    public function setScopeIds(?array $value): void {
        $this->getBackingStore()->set('scopeIds', $value);
    }

    /**
     * Sets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}.
     * @param string|null $value Value to set for the sourceImageResourceId property.
    */
    public function setSourceImageResourceId(?string $value): void {
        $this->getBackingStore()->set('sourceImageResourceId', $value);
    }

    /**
     * Sets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     * @param CloudPcDeviceImage_status|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcDeviceImage_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetails property value. The details of the status of the image that indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     * @param CloudPcDeviceImage_statusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcDeviceImage_statusDetails $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

    /**
     * Sets the version property value. The image version. For example, 0.0.1 and 1.5.13.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
