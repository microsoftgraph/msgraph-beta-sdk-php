<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationValueMultiTextCollectionResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * @var array<GroupPolicyPresentationValueMultiText>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationValueMultiTextCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValueMultiTextCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValueMultiTextCollectionResponse {
        return new GroupPolicyPresentationValueMultiTextCollectionResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getCollectionOfObjectValues(array(GroupPolicyPresentationValueMultiText::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<GroupPolicyPresentationValueMultiText>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->value);
    }

    /**
     * Sets the value property value. The value property
     *  @param array<GroupPolicyPresentationValueMultiText>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
