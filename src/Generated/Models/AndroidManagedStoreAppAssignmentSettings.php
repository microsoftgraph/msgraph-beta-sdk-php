<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('androidManagedStoreAppTrackIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidManagedStoreAppTrackIds'");
    }

    /**
     * Gets the autoUpdateMode property value. Prioritization for automatic updates of Android Managed Store apps set on assignment.
     * @return AndroidManagedStoreAutoUpdateMode|null
    */
    public function getAutoUpdateMode(): ?AndroidManagedStoreAutoUpdateMode {
        $val = $this->getBackingStore()->get('autoUpdateMode');
        if (is_null($val) || $val instanceof AndroidManagedStoreAutoUpdateMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoUpdateMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedStoreAppTrackIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAndroidManagedStoreAppTrackIds($val);
            },
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
     * @param array<string>|null $value Value to set for the androidManagedStoreAppTrackIds property.
    */
    public function setAndroidManagedStoreAppTrackIds(?array $value): void {
        $this->getBackingStore()->set('androidManagedStoreAppTrackIds', $value);
    }

    /**
     * Sets the autoUpdateMode property value. Prioritization for automatic updates of Android Managed Store apps set on assignment.
     * @param AndroidManagedStoreAutoUpdateMode|null $value Value to set for the autoUpdateMode property.
    */
    public function setAutoUpdateMode(?AndroidManagedStoreAutoUpdateMode $value): void {
        $this->getBackingStore()->set('autoUpdateMode', $value);
    }

}
