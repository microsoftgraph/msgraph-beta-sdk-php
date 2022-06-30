<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosSingleSignOnExtension extends SingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new IosSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosSingleSignOnExtension {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosAzureAdSingleSignOnExtension': return new IosAzureAdSingleSignOnExtension();
                case '#microsoft.graph.iosCredentialSingleSignOnExtension': return new IosCredentialSingleSignOnExtension();
                case '#microsoft.graph.iosKerberosSingleSignOnExtension': return new IosKerberosSingleSignOnExtension();
                case '#microsoft.graph.iosRedirectSingleSignOnExtension': return new IosRedirectSingleSignOnExtension();
            }
        }
        return new IosSingleSignOnExtension();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
