<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureAdTokenAuthentication extends CustomExtensionAuthenticationConfiguration implements Parsable 
{
    /**
     * @var string|null $resourceId The appID of the Azure AD application to use to authenticate a logic app with a custom access package workflow extension.
    */
    private ?string $resourceId = null;
    
    /**
     * Instantiates a new AzureAdTokenAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureAdTokenAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAdTokenAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAdTokenAuthentication {
        return new AzureAdTokenAuthentication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the resourceId property value. The appID of the Azure AD application to use to authenticate a logic app with a custom access package workflow extension.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('resourceId', $this->resourceId);
    }

    /**
     * Sets the resourceId property value. The appID of the Azure AD application to use to authenticate a logic app with a custom access package workflow extension.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

}
