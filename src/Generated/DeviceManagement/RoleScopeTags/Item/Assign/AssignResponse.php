<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RoleScopeTags\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\BaseCollectionPaginationCountResponse;
use Microsoft\Graph\Beta\Generated\Models\RoleScopeTagAutoAssignment;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * Instantiates a new assignResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignResponse {
        return new AssignResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([RoleScopeTagAutoAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<RoleScopeTagAutoAssignment>|null
    */
    public function getValue(): ?array {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the value property value. The value property
     *  @param array<RoleScopeTagAutoAssignment>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
