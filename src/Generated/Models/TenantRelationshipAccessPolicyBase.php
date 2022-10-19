<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantRelationshipAccessPolicyBase extends PolicyBase implements Parsable 
{
    /**
     * @var array<string>|null $definition The definition property
    */
    private ?array $definition = null;
    
    /**
     * Instantiates a new TenantRelationshipAccessPolicyBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tenantRelationshipAccessPolicyBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantRelationshipAccessPolicyBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantRelationshipAccessPolicyBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.crossTenantAccessPolicy': return new CrossTenantAccessPolicy();
            }
        }
        return new TenantRelationshipAccessPolicyBase();
    }

    /**
     * Gets the definition property value. The definition property
     * @return array<string>|null
    */
    public function getDefinition(): ?array {
        return $this->definition;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => fn(ParseNode $n) => $o->setDefinition($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('definition', $this->definition);
    }

    /**
     * Sets the definition property value. The definition property
     *  @param array<string>|null $value Value to set for the definition property.
    */
    public function setDefinition(?array $value ): void {
        $this->definition = $value;
    }

}
