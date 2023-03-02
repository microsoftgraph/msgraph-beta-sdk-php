<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateManagementEnrollment extends UpdatableAssetEnrollment implements Parsable 
{
    /**
     * Instantiates a new UpdateManagementEnrollment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.updateManagementEnrollment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateManagementEnrollment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateManagementEnrollment {
        return new UpdateManagementEnrollment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'updateCategory' => fn(ParseNode $n) => $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)),
        ]);
    }

    /**
     * Gets the updateCategory property value. The updateCategory property
     * @return UpdateCategory|null
    */
    public function getUpdateCategory(): ?UpdateCategory {
        return $this->getBackingStore()->get('updateCategory');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('updateCategory', $this->getUpdateCategory());
    }

    /**
     * Sets the updateCategory property value. The updateCategory property
     * @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value): void {
        $this->getBackingStore()->set('updateCategory', $value);
    }

}
