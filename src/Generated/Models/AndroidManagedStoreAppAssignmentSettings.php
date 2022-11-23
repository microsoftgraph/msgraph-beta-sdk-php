<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedStoreAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new AndroidManagedStoreAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedStoreAppAssignmentSettings');
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
     * Gets the androidManagedStoreAppTrackIds property value. The track IDs to enable for this app assignment.
     * @return array<string>|null
    */
    public function getAndroidManagedStoreAppTrackIds(): ?array {
        return $this->getBackingStore()->get('androidManagedStoreAppTrackIds');
    }

    /**
     * Gets the autoUpdateMode property value. Prioritization for automatic updates of Android Managed Store apps set on assignment.
     * @return AndroidManagedStoreAutoUpdateMode|null
    */
    public function getAutoUpdateMode(): ?AndroidManagedStoreAutoUpdateMode {
        return $this->getBackingStore()->get('autoUpdateMode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedStoreAppTrackIds' => fn(ParseNode $n) => $o->setAndroidManagedStoreAppTrackIds($n->getCollectionOfPrimitiveValues()),
            'autoUpdateMode' => fn(ParseNode $n) => $o->setAutoUpdateMode($n->getEnumValue(AndroidManagedStoreAutoUpdateMode::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('androidManagedStoreAppTrackIds', $this->getAndroidManagedStoreAppTrackIds());
        $writer->writeEnumValue('autoUpdateMode', $this->getAutoUpdateMode());
    }

    /**
     * Sets the androidManagedStoreAppTrackIds property value. The track IDs to enable for this app assignment.
     *  @param array<string>|null $value Value to set for the androidManagedStoreAppTrackIds property.
    */
    public function setAndroidManagedStoreAppTrackIds(?array $value): void {
        $this->getBackingStore()->set('androidManagedStoreAppTrackIds', $value);
    }

    /**
     * Sets the autoUpdateMode property value. Prioritization for automatic updates of Android Managed Store apps set on assignment.
     *  @param AndroidManagedStoreAutoUpdateMode|null $value Value to set for the autoUpdateMode property.
    */
    public function setAutoUpdateMode(?AndroidManagedStoreAutoUpdateMode $value): void {
        $this->getBackingStore()->set('autoUpdateMode', $value);
    }

}
