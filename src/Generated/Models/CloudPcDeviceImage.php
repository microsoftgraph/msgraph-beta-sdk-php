<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CloudPcDeviceImage extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The image's display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $expirationDate The date the image became unavailable.
    */
    private ?Date $expirationDate = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $operatingSystem The image's operating system. For example: Windows 10 Enterprise.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $osBuildNumber The image's OS build version. For example: 1909.
    */
    private ?string $osBuildNumber = null;
    
    /**
     * @var CloudPcDeviceImageOsStatus|null $osStatus The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
    */
    private ?CloudPcDeviceImageOsStatus $osStatus = null;
    
    /**
     * @var string|null $sourceImageResourceId The ID of the source image resource on Azure. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'.
    */
    private ?string $sourceImageResourceId = null;
    
    /**
     * @var CloudPcDeviceImageStatus|null $status The status of the image on Cloud PC. Possible values are: pending, ready, failed.
    */
    private ?CloudPcDeviceImageStatus $status = null;
    
    /**
     * @var CloudPcDeviceImageStatusDetails|null $statusDetails The details of the image's status, which indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
    */
    private ?CloudPcDeviceImageStatusDetails $statusDetails = null;
    
    /**
     * @var string|null $version The image version. For example: 0.0.1, 1.5.13.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new CloudPcDeviceImage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The image's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expirationDate property value. The date the image became unavailable.
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'expirationDate' => function (ParseNode $n) use ($o) { $o->setExpirationDate($n->getDateValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'osBuildNumber' => function (ParseNode $n) use ($o) { $o->setOsBuildNumber($n->getStringValue()); },
            'osStatus' => function (ParseNode $n) use ($o) { $o->setOsStatus($n->getEnumValue(CloudPcDeviceImageOsStatus::class)); },
            'sourceImageResourceId' => function (ParseNode $n) use ($o) { $o->setSourceImageResourceId($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CloudPcDeviceImageStatus::class)); },
            'statusDetails' => function (ParseNode $n) use ($o) { $o->setStatusDetails($n->getEnumValue(CloudPcDeviceImageStatusDetails::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the operatingSystem property value. The image's operating system. For example: Windows 10 Enterprise.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the osBuildNumber property value. The image's OS build version. For example: 1909.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->osBuildNumber;
    }

    /**
     * Gets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     * @return CloudPcDeviceImageOsStatus|null
    */
    public function getOsStatus(): ?CloudPcDeviceImageOsStatus {
        return $this->osStatus;
    }

    /**
     * Gets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'.
     * @return string|null
    */
    public function getSourceImageResourceId(): ?string {
        return $this->sourceImageResourceId;
    }

    /**
     * Gets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     * @return CloudPcDeviceImageStatus|null
    */
    public function getStatus(): ?CloudPcDeviceImageStatus {
        return $this->status;
    }

    /**
     * Gets the statusDetails property value. The details of the image's status, which indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     * @return CloudPcDeviceImageStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcDeviceImageStatusDetails {
        return $this->statusDetails;
    }

    /**
     * Gets the version property value. The image version. For example: 0.0.1, 1.5.13.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('expirationDate', $this->expirationDate);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeEnumValue('osStatus', $this->osStatus);
        $writer->writeStringValue('sourceImageResourceId', $this->sourceImageResourceId);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeEnumValue('statusDetails', $this->statusDetails);
        $writer->writeStringValue('version', $this->version);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayName property value. The image's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expirationDate property value. The date the image became unavailable.
     *  @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value ): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The data and time that the image was last modified. The time is shown in ISO 8601 format and  Coordinated Universal Time (UTC) time. For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the operatingSystem property value. The image's operating system. For example: Windows 10 Enterprise.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the osBuildNumber property value. The image's OS build version. For example: 1909.
     *  @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value ): void {
        $this->osBuildNumber = $value;
    }

    /**
     * Sets the osStatus property value. The OS status of this image. Possible values are: supported, supportedWithWarning, unknownFutureValue.
     *  @param CloudPcDeviceImageOsStatus|null $value Value to set for the osStatus property.
    */
    public function setOsStatus(?CloudPcDeviceImageOsStatus $value ): void {
        $this->osStatus = $value;
    }

    /**
     * Sets the sourceImageResourceId property value. The ID of the source image resource on Azure. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'.
     *  @param string|null $value Value to set for the sourceImageResourceId property.
    */
    public function setSourceImageResourceId(?string $value ): void {
        $this->sourceImageResourceId = $value;
    }

    /**
     * Sets the status property value. The status of the image on Cloud PC. Possible values are: pending, ready, failed.
     *  @param CloudPcDeviceImageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcDeviceImageStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDetails property value. The details of the image's status, which indicates why the upload failed, if applicable. Possible values are: internalServerError, sourceImageNotFound, osVersionNotSupported, sourceImageInvalid, and sourceImageNotGeneralized.
     *  @param CloudPcDeviceImageStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcDeviceImageStatusDetails $value ): void {
        $this->statusDetails = $value;
    }

    /**
     * Sets the version property value. The image version. For example: 0.0.1, 1.5.13.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
