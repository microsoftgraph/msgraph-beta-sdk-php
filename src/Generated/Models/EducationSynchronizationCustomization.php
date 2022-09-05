<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationCustomization implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowDisplayNameUpdate Indicates whether the display name of the resource can be overwritten by the sync.
    */
    private ?bool $allowDisplayNameUpdate = null;
    
    /**
     * @var bool|null $isSyncDeferred Indicates whether synchronization of the parent entity is deferred to a later date.
    */
    private ?bool $isSyncDeferred = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $optionalPropertiesToSync The collection of property names to sync. If set to null, all properties will be synchronized. Does not apply to Student Enrollments or Teacher Rosters
    */
    private ?array $optionalPropertiesToSync = null;
    
    /**
     * @var DateTime|null $synchronizationStartDate The date that the synchronization should start. This value should be set to a future date. If set to null, the resource will be synchronized when the profile setup completes. Only applies to Student Enrollments
    */
    private ?DateTime $synchronizationStartDate = null;
    
    /**
     * Instantiates a new educationSynchronizationCustomization and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.educationSynchronizationCustomization');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationCustomization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationCustomization {
        return new EducationSynchronizationCustomization();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowDisplayNameUpdate property value. Indicates whether the display name of the resource can be overwritten by the sync.
     * @return bool|null
    */
    public function getAllowDisplayNameUpdate(): ?bool {
        return $this->allowDisplayNameUpdate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowDisplayNameUpdate' => function (ParseNode $n) use ($o) { $o->setAllowDisplayNameUpdate($n->getBooleanValue()); },
            'isSyncDeferred' => function (ParseNode $n) use ($o) { $o->setIsSyncDeferred($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'optionalPropertiesToSync' => function (ParseNode $n) use ($o) { $o->setOptionalPropertiesToSync($n->getCollectionOfPrimitiveValues()); },
            'synchronizationStartDate' => function (ParseNode $n) use ($o) { $o->setSynchronizationStartDate($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the isSyncDeferred property value. Indicates whether synchronization of the parent entity is deferred to a later date.
     * @return bool|null
    */
    public function getIsSyncDeferred(): ?bool {
        return $this->isSyncDeferred;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the optionalPropertiesToSync property value. The collection of property names to sync. If set to null, all properties will be synchronized. Does not apply to Student Enrollments or Teacher Rosters
     * @return array<string>|null
    */
    public function getOptionalPropertiesToSync(): ?array {
        return $this->optionalPropertiesToSync;
    }

    /**
     * Gets the synchronizationStartDate property value. The date that the synchronization should start. This value should be set to a future date. If set to null, the resource will be synchronized when the profile setup completes. Only applies to Student Enrollments
     * @return DateTime|null
    */
    public function getSynchronizationStartDate(): ?DateTime {
        return $this->synchronizationStartDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowDisplayNameUpdate', $this->allowDisplayNameUpdate);
        $writer->writeBooleanValue('isSyncDeferred', $this->isSyncDeferred);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('optionalPropertiesToSync', $this->optionalPropertiesToSync);
        $writer->writeDateTimeValue('synchronizationStartDate', $this->synchronizationStartDate);
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
     * Sets the allowDisplayNameUpdate property value. Indicates whether the display name of the resource can be overwritten by the sync.
     *  @param bool|null $value Value to set for the allowDisplayNameUpdate property.
    */
    public function setAllowDisplayNameUpdate(?bool $value ): void {
        $this->allowDisplayNameUpdate = $value;
    }

    /**
     * Sets the isSyncDeferred property value. Indicates whether synchronization of the parent entity is deferred to a later date.
     *  @param bool|null $value Value to set for the isSyncDeferred property.
    */
    public function setIsSyncDeferred(?bool $value ): void {
        $this->isSyncDeferred = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the optionalPropertiesToSync property value. The collection of property names to sync. If set to null, all properties will be synchronized. Does not apply to Student Enrollments or Teacher Rosters
     *  @param array<string>|null $value Value to set for the optionalPropertiesToSync property.
    */
    public function setOptionalPropertiesToSync(?array $value ): void {
        $this->optionalPropertiesToSync = $value;
    }

    /**
     * Sets the synchronizationStartDate property value. The date that the synchronization should start. This value should be set to a future date. If set to null, the resource will be synchronized when the profile setup completes. Only applies to Student Enrollments
     *  @param DateTime|null $value Value to set for the synchronizationStartDate property.
    */
    public function setSynchronizationStartDate(?DateTime $value ): void {
        $this->synchronizationStartDate = $value;
    }

}
