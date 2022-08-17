<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcReviewStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $azureStorageAccountId The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
    */
    private ?string $azureStorageAccountId = null;
    
    /**
     * @var string|null $azureStorageAccountName The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
    */
    private ?string $azureStorageAccountName = null;
    
    /**
     * @var string|null $azureStorageContainerName The name of the container in an Azure Storage account in which the Cloud PC snapshot is being saved.
    */
    private ?string $azureStorageContainerName = null;
    
    /**
     * @var bool|null $inReview True if the Cloud PC is set to in review by the administrator.
    */
    private ?bool $inReview = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $restorePointDateTime The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    */
    private ?DateTime $restorePointDateTime = null;
    
    /**
     * @var DateTime|null $reviewStartDateTime The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    */
    private ?DateTime $reviewStartDateTime = null;
    
    /**
     * @var string|null $subscriptionId The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionName The name of the Azure subscription in which the Cloud PC snapshot is being saved.
    */
    private ?string $subscriptionName = null;
    
    /**
     * @var CloudPcUserAccessLevel|null $userAccessLevel The userAccessLevel property
    */
    private ?CloudPcUserAccessLevel $userAccessLevel = null;
    
    /**
     * Instantiates a new cloudPcReviewStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcReviewStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcReviewStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcReviewStatus {
        return new CloudPcReviewStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureStorageAccountId property value. The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageAccountId(): ?string {
        return $this->azureStorageAccountId;
    }

    /**
     * Gets the azureStorageAccountName property value. The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageAccountName(): ?string {
        return $this->azureStorageAccountName;
    }

    /**
     * Gets the azureStorageContainerName property value. The name of the container in an Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageContainerName(): ?string {
        return $this->azureStorageContainerName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'azureStorageAccountId' => function (ParseNode $n) use ($o) { $o->setAzureStorageAccountId($n->getStringValue()); },
            'azureStorageAccountName' => function (ParseNode $n) use ($o) { $o->setAzureStorageAccountName($n->getStringValue()); },
            'azureStorageContainerName' => function (ParseNode $n) use ($o) { $o->setAzureStorageContainerName($n->getStringValue()); },
            'inReview' => function (ParseNode $n) use ($o) { $o->setInReview($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'restorePointDateTime' => function (ParseNode $n) use ($o) { $o->setRestorePointDateTime($n->getDateTimeValue()); },
            'reviewStartDateTime' => function (ParseNode $n) use ($o) { $o->setReviewStartDateTime($n->getDateTimeValue()); },
            'subscriptionId' => function (ParseNode $n) use ($o) { $o->setSubscriptionId($n->getStringValue()); },
            'subscriptionName' => function (ParseNode $n) use ($o) { $o->setSubscriptionName($n->getStringValue()); },
            'userAccessLevel' => function (ParseNode $n) use ($o) { $o->setUserAccessLevel($n->getEnumValue(CloudPcUserAccessLevel::class)); },
        ];
    }

    /**
     * Gets the inReview property value. True if the Cloud PC is set to in review by the administrator.
     * @return bool|null
    */
    public function getInReview(): ?bool {
        return $this->inReview;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the restorePointDateTime property value. The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        return $this->restorePointDateTime;
    }

    /**
     * Gets the reviewStartDateTime property value. The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getReviewStartDateTime(): ?DateTime {
        return $this->reviewStartDateTime;
    }

    /**
     * Gets the subscriptionId property value. The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionName property value. The name of the Azure subscription in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        return $this->subscriptionName;
    }

    /**
     * Gets the userAccessLevel property value. The userAccessLevel property
     * @return CloudPcUserAccessLevel|null
    */
    public function getUserAccessLevel(): ?CloudPcUserAccessLevel {
        return $this->userAccessLevel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('azureStorageAccountId', $this->azureStorageAccountId);
        $writer->writeStringValue('azureStorageAccountName', $this->azureStorageAccountName);
        $writer->writeStringValue('azureStorageContainerName', $this->azureStorageContainerName);
        $writer->writeBooleanValue('inReview', $this->inReview);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('restorePointDateTime', $this->restorePointDateTime);
        $writer->writeDateTimeValue('reviewStartDateTime', $this->reviewStartDateTime);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
        $writer->writeStringValue('subscriptionName', $this->subscriptionName);
        $writer->writeEnumValue('userAccessLevel', $this->userAccessLevel);
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
     * Sets the azureStorageAccountId property value. The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
     *  @param string|null $value Value to set for the azureStorageAccountId property.
    */
    public function setAzureStorageAccountId(?string $value ): void {
        $this->azureStorageAccountId = $value;
    }

    /**
     * Sets the azureStorageAccountName property value. The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
     *  @param string|null $value Value to set for the azureStorageAccountName property.
    */
    public function setAzureStorageAccountName(?string $value ): void {
        $this->azureStorageAccountName = $value;
    }

    /**
     * Sets the azureStorageContainerName property value. The name of the container in an Azure Storage account in which the Cloud PC snapshot is being saved.
     *  @param string|null $value Value to set for the azureStorageContainerName property.
    */
    public function setAzureStorageContainerName(?string $value ): void {
        $this->azureStorageContainerName = $value;
    }

    /**
     * Sets the inReview property value. True if the Cloud PC is set to in review by the administrator.
     *  @param bool|null $value Value to set for the inReview property.
    */
    public function setInReview(?bool $value ): void {
        $this->inReview = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the restorePointDateTime property value. The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value ): void {
        $this->restorePointDateTime = $value;
    }

    /**
     * Sets the reviewStartDateTime property value. The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the reviewStartDateTime property.
    */
    public function setReviewStartDateTime(?DateTime $value ): void {
        $this->reviewStartDateTime = $value;
    }

    /**
     * Sets the subscriptionId property value. The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionName property value. The name of the Azure subscription in which the Cloud PC snapshot is being saved.
     *  @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value ): void {
        $this->subscriptionName = $value;
    }

    /**
     * Sets the userAccessLevel property value. The userAccessLevel property
     *  @param CloudPcUserAccessLevel|null $value Value to set for the userAccessLevel property.
    */
    public function setUserAccessLevel(?CloudPcUserAccessLevel $value ): void {
        $this->userAccessLevel = $value;
    }

}
