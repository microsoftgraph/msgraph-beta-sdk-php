<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedStoreAppAssignmentSettings extends MobileAppAssignmentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $androidManagedStoreAppTrackIds The track IDs to enable for this app assignment.
    */
    private ?array $androidManagedStoreAppTrackIds = null;
    
    /**
     * @var AndroidManagedStoreAutoUpdateMode|null $autoUpdateMode The prioritization of automatic updates for this app assignment. Possible values are: default, postponed, priority, unknownFutureValue.
    */
    private ?AndroidManagedStoreAutoUpdateMode $autoUpdateMode = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAppAssignmentSettings {
        return new AndroidManagedStoreAppAssignmentSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the androidManagedStoreAppTrackIds property value. The track IDs to enable for this app assignment.
     * @return array<string>|null
    */
    public function getAndroidManagedStoreAppTrackIds(): ?array {
        return $this->androidManagedStoreAppTrackIds;
    }

    /**
     * Gets the autoUpdateMode property value. The prioritization of automatic updates for this app assignment. Possible values are: default, postponed, priority, unknownFutureValue.
     * @return AndroidManagedStoreAutoUpdateMode|null
    */
    public function getAutoUpdateMode(): ?AndroidManagedStoreAutoUpdateMode {
        return $this->autoUpdateMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedStoreAppTrackIds' => function (ParseNode $n) use ($o) { $o->setAndroidManagedStoreAppTrackIds($n->getCollectionOfPrimitiveValues()); },
            'autoUpdateMode' => function (ParseNode $n) use ($o) { $o->setAutoUpdateMode($n->getEnumValue(AndroidManagedStoreAutoUpdateMode::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('androidManagedStoreAppTrackIds', $this->androidManagedStoreAppTrackIds);
        $writer->writeEnumValue('autoUpdateMode', $this->autoUpdateMode);
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
     * Sets the androidManagedStoreAppTrackIds property value. The track IDs to enable for this app assignment.
     *  @param array<string>|null $value Value to set for the androidManagedStoreAppTrackIds property.
    */
    public function setAndroidManagedStoreAppTrackIds(?array $value ): void {
        $this->androidManagedStoreAppTrackIds = $value;
    }

    /**
     * Sets the autoUpdateMode property value. The prioritization of automatic updates for this app assignment. Possible values are: default, postponed, priority, unknownFutureValue.
     *  @param AndroidManagedStoreAutoUpdateMode|null $value Value to set for the autoUpdateMode property.
    */
    public function setAutoUpdateMode(?AndroidManagedStoreAutoUpdateMode $value ): void {
        $this->autoUpdateMode = $value;
    }

}
