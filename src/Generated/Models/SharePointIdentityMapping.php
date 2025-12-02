<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointIdentityMapping extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointIdentityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointIdentityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointIdentityMapping {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.sharePointGroupIdentityMapping': return new SharePointGroupIdentityMapping();
                case '#microsoft.graph.sharePointUserIdentityMapping': return new SharePointUserIdentityMapping();
            }
        }
        return new SharePointIdentityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sourceOrganizationId' => fn(ParseNode $n) => $o->setSourceOrganizationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sourceOrganizationId property value. The unique identifier of the source organization in the migration.
     * @return string|null
    */
    public function getSourceOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('sourceOrganizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceOrganizationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('sourceOrganizationId', $this->getSourceOrganizationId());
    }

    /**
     * Sets the sourceOrganizationId property value. The unique identifier of the source organization in the migration.
     * @param string|null $value Value to set for the sourceOrganizationId property.
    */
    public function setSourceOrganizationId(?string $value): void {
        $this->getBackingStore()->set('sourceOrganizationId', $value);
    }

}
