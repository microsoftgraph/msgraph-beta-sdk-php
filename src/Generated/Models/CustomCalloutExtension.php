<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomCalloutExtension extends Entity implements Parsable 
{
    /**
     * @var CustomExtensionAuthenticationConfiguration|null $authenticationConfiguration Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
    */
    private ?CustomExtensionAuthenticationConfiguration $authenticationConfiguration = null;
    
    /**
     * @var CustomExtensionClientConfiguration|null $clientConfiguration HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
    */
    private ?CustomExtensionClientConfiguration $clientConfiguration = null;
    
    /**
     * @var string|null $description Description for the customCalloutExtension object.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name for the customCalloutExtension object.
    */
    private ?string $displayName = null;
    
    /**
     * @var CustomExtensionEndpointConfiguration|null $endpointConfiguration The type and details for configuring the endpoint to call the logic app's workflow.
    */
    private ?CustomExtensionEndpointConfiguration $endpointConfiguration = null;
    
    /**
     * Instantiates a new customCalloutExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customCalloutExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomCalloutExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomCalloutExtension {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.customAccessPackageWorkflowExtension': return new CustomAccessPackageWorkflowExtension();
                case '#microsoft.graph.customAuthenticationExtension': return new CustomAuthenticationExtension();
                case '#microsoft.graph.identityGovernance.customTaskExtension': return new CustomTaskExtension();
                case '#microsoft.graph.onTokenIssuanceStartCustomExtension': return new OnTokenIssuanceStartCustomExtension();
            }
        }
        return new CustomCalloutExtension();
    }

    /**
     * Gets the authenticationConfiguration property value. Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     * @return CustomExtensionAuthenticationConfiguration|null
    */
    public function getAuthenticationConfiguration(): ?CustomExtensionAuthenticationConfiguration {
        return $this->authenticationConfiguration;
    }

    /**
     * Gets the clientConfiguration property value. HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     * @return CustomExtensionClientConfiguration|null
    */
    public function getClientConfiguration(): ?CustomExtensionClientConfiguration {
        return $this->clientConfiguration;
    }

    /**
     * Gets the description property value. Description for the customCalloutExtension object.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for the customCalloutExtension object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endpointConfiguration property value. The type and details for configuring the endpoint to call the logic app's workflow.
     * @return CustomExtensionEndpointConfiguration|null
    */
    public function getEndpointConfiguration(): ?CustomExtensionEndpointConfiguration {
        return $this->endpointConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationConfiguration' => fn(ParseNode $n) => $o->setAuthenticationConfiguration($n->getObjectValue([CustomExtensionAuthenticationConfiguration::class, 'createFromDiscriminatorValue'])),
            'clientConfiguration' => fn(ParseNode $n) => $o->setClientConfiguration($n->getObjectValue([CustomExtensionClientConfiguration::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endpointConfiguration' => fn(ParseNode $n) => $o->setEndpointConfiguration($n->getObjectValue([CustomExtensionEndpointConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authenticationConfiguration', $this->authenticationConfiguration);
        $writer->writeObjectValue('clientConfiguration', $this->clientConfiguration);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('endpointConfiguration', $this->endpointConfiguration);
    }

    /**
     * Sets the authenticationConfiguration property value. Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     *  @param CustomExtensionAuthenticationConfiguration|null $value Value to set for the authenticationConfiguration property.
    */
    public function setAuthenticationConfiguration(?CustomExtensionAuthenticationConfiguration $value ): void {
        $this->authenticationConfiguration = $value;
    }

    /**
     * Sets the clientConfiguration property value. HTTP connection settings that define how long Azure AD can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     *  @param CustomExtensionClientConfiguration|null $value Value to set for the clientConfiguration property.
    */
    public function setClientConfiguration(?CustomExtensionClientConfiguration $value ): void {
        $this->clientConfiguration = $value;
    }

    /**
     * Sets the description property value. Description for the customCalloutExtension object.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for the customCalloutExtension object.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endpointConfiguration property value. The type and details for configuring the endpoint to call the logic app's workflow.
     *  @param CustomExtensionEndpointConfiguration|null $value Value to set for the endpointConfiguration property.
    */
    public function setEndpointConfiguration(?CustomExtensionEndpointConfiguration $value ): void {
        $this->endpointConfiguration = $value;
    }

}
