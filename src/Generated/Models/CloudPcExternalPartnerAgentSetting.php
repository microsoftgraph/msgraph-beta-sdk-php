<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcExternalPartnerAgentSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcExternalPartnerAgentSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExternalPartnerAgentSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExternalPartnerAgentSetting {
        return new CloudPcExternalPartnerAgentSetting();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the agentSha256 property value. The hash value of agent file by sha256 algorithm.
     * @return string|null
    */
    public function getAgentSha256(): ?string {
        $val = $this->getBackingStore()->get('agentSha256');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentSha256'");
    }

    /**
     * Gets the agentUrl property value. The download link url of the agent, when admin sets this url, then partner can call deploy agent API to deploy this agent to targeted Cloud PCs. The format is like this: https://www.external-partner.com/resources/agents/exampleAgentFile.exe
     * @return string|null
    */
    public function getAgentUrl(): ?string {
        $val = $this->getBackingStore()->get('agentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentUrl'");
    }

    /**
     * Gets the autoDeploymentEnabled property value. Indicates whether partner agent auto deployment is enabled. When true, then the partner agent will be deployed after the Cloud PC is provisioned. When false, auto deployment isn't performed. Default value is false
     * @return bool|null
    */
    public function getAutoDeploymentEnabled(): ?bool {
        $val = $this->getBackingStore()->get('autoDeploymentEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoDeploymentEnabled'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agentSha256' => fn(ParseNode $n) => $o->setAgentSha256($n->getStringValue()),
            'agentUrl' => fn(ParseNode $n) => $o->setAgentUrl($n->getStringValue()),
            'autoDeploymentEnabled' => fn(ParseNode $n) => $o->setAutoDeploymentEnabled($n->getBooleanValue()),
            'installParameters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInstallParameters($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the installParameters property value. The install command parameters to run the agent install command. The format is like this: ['/p paramValue', '/quiet']
     * @return array<string>|null
    */
    public function getInstallParameters(): ?array {
        $val = $this->getBackingStore()->get('installParameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installParameters'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('agentSha256', $this->getAgentSha256());
        $writer->writeStringValue('agentUrl', $this->getAgentUrl());
        $writer->writeBooleanValue('autoDeploymentEnabled', $this->getAutoDeploymentEnabled());
        $writer->writeCollectionOfPrimitiveValues('installParameters', $this->getInstallParameters());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agentSha256 property value. The hash value of agent file by sha256 algorithm.
     * @param string|null $value Value to set for the agentSha256 property.
    */
    public function setAgentSha256(?string $value): void {
        $this->getBackingStore()->set('agentSha256', $value);
    }

    /**
     * Sets the agentUrl property value. The download link url of the agent, when admin sets this url, then partner can call deploy agent API to deploy this agent to targeted Cloud PCs. The format is like this: https://www.external-partner.com/resources/agents/exampleAgentFile.exe
     * @param string|null $value Value to set for the agentUrl property.
    */
    public function setAgentUrl(?string $value): void {
        $this->getBackingStore()->set('agentUrl', $value);
    }

    /**
     * Sets the autoDeploymentEnabled property value. Indicates whether partner agent auto deployment is enabled. When true, then the partner agent will be deployed after the Cloud PC is provisioned. When false, auto deployment isn't performed. Default value is false
     * @param bool|null $value Value to set for the autoDeploymentEnabled property.
    */
    public function setAutoDeploymentEnabled(?bool $value): void {
        $this->getBackingStore()->set('autoDeploymentEnabled', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the installParameters property value. The install command parameters to run the agent install command. The format is like this: ['/p paramValue', '/quiet']
     * @param array<string>|null $value Value to set for the installParameters property.
    */
    public function setInstallParameters(?array $value): void {
        $this->getBackingStore()->set('installParameters', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
