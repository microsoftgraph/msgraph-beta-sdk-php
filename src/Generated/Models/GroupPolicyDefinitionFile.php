<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The entity represents an ADMX (Administrative Template) XML file. The ADMX file contains a collection of group policy definitions and their locations by category path. The group policy definition file also contains the languages supported as determined by the language dependent ADML (Administrative Template) language files.
*/
class GroupPolicyDefinitionFile extends Entity implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyDefinitionFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyDefinitionFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinitionFile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyUploadedDefinitionFile': return new GroupPolicyUploadedDefinitionFile();
            }
        }
        return new GroupPolicyDefinitionFile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
