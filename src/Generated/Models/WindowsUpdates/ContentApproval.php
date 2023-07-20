<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ContentApproval extends ComplianceChange implements Parsable 
{
    /**
     * Instantiates a new contentApproval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.contentApproval');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentApproval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentApproval {
        return new ContentApproval();
    }

    /**
     * Gets the content property value. The content property
     * @return DeployableContent|null
    */
    public function getContent(): ?DeployableContent {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof DeployableContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the deployments property value. Deployments created as a result of applying the approval.
     * @return array<Deployment>|null
    */
    public function getDeployments(): ?array {
        $val = $this->getBackingStore()->get('deployments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Deployment::class);
            /** @var array<Deployment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployments'");
    }

    /**
     * Gets the deploymentSettings property value. Settings for governing how to deploy content.
     * @return DeploymentSettings|null
    */
    public function getDeploymentSettings(): ?DeploymentSettings {
        $val = $this->getBackingStore()->get('deploymentSettings');
        if (is_null($val) || $val instanceof DeploymentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([DeployableContent::class, 'createFromDiscriminatorValue'])),
            'deployments' => fn(ParseNode $n) => $o->setDeployments($n->getCollectionOfObjectValues([Deployment::class, 'createFromDiscriminatorValue'])),
            'deploymentSettings' => fn(ParseNode $n) => $o->setDeploymentSettings($n->getObjectValue([DeploymentSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeCollectionOfObjectValues('deployments', $this->getDeployments());
        $writer->writeObjectValue('deploymentSettings', $this->getDeploymentSettings());
    }

    /**
     * Sets the content property value. The content property
     * @param DeployableContent|null $value Value to set for the content property.
    */
    public function setContent(?DeployableContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the deployments property value. Deployments created as a result of applying the approval.
     * @param array<Deployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value): void {
        $this->getBackingStore()->set('deployments', $value);
    }

    /**
     * Sets the deploymentSettings property value. Settings for governing how to deploy content.
     * @param DeploymentSettings|null $value Value to set for the deploymentSettings property.
    */
    public function setDeploymentSettings(?DeploymentSettings $value): void {
        $this->getBackingStore()->set('deploymentSettings', $value);
    }

}
