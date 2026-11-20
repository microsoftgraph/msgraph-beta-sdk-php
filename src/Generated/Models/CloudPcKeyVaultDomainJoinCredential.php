<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcKeyVaultDomainJoinCredential extends CloudPcDomainJoinCredential implements Parsable 
{
    /**
     * Instantiates a new CloudPcKeyVaultDomainJoinCredential and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcKeyVaultDomainJoinCredential');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcKeyVaultDomainJoinCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcKeyVaultDomainJoinCredential {
        return new CloudPcKeyVaultDomainJoinCredential();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keyVaultIntentConfiguration' => fn(ParseNode $n) => $o->setKeyVaultIntentConfiguration($n->getObjectValue([CloudPcDomainJoinKeyVaultIntentConfiguration::class, 'createFromDiscriminatorValue'])),
            'keyVaultResourceId' => fn(ParseNode $n) => $o->setKeyVaultResourceId($n->getStringValue()),
            'secretName' => fn(ParseNode $n) => $o->setSecretName($n->getStringValue()),
            'serviceConnectorResourceId' => fn(ParseNode $n) => $o->setServiceConnectorResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyVaultIntentConfiguration property value. The keyVaultIntentConfiguration property
     * @return CloudPcDomainJoinKeyVaultIntentConfiguration|null
    */
    public function getKeyVaultIntentConfiguration(): ?CloudPcDomainJoinKeyVaultIntentConfiguration {
        $val = $this->getBackingStore()->get('keyVaultIntentConfiguration');
        if (is_null($val) || $val instanceof CloudPcDomainJoinKeyVaultIntentConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyVaultIntentConfiguration'");
    }

    /**
     * Gets the keyVaultResourceId property value. The full Azure Resource Manager resource ID of the Azure Key Vault that stores the domain join password. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.KeyVault/vaults/{vaultName}. Required.
     * @return string|null
    */
    public function getKeyVaultResourceId(): ?string {
        $val = $this->getBackingStore()->get('keyVaultResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyVaultResourceId'");
    }

    /**
     * Gets the secretName property value. The name of the secret in the Azure Key Vault that stores the domain join password. Required.
     * @return string|null
    */
    public function getSecretName(): ?string {
        $val = $this->getBackingStore()->get('secretName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretName'");
    }

    /**
     * Gets the serviceConnectorResourceId property value. The full Azure Resource Manager resource ID of the Windows 365 service connector that grants Windows 365 access to the Azure Key Vault. Required format when specified: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Windows365/serviceConnectors/{serviceConnectorName}. Optional.
     * @return string|null
    */
    public function getServiceConnectorResourceId(): ?string {
        $val = $this->getBackingStore()->get('serviceConnectorResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceConnectorResourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('keyVaultIntentConfiguration', $this->getKeyVaultIntentConfiguration());
        $writer->writeStringValue('keyVaultResourceId', $this->getKeyVaultResourceId());
        $writer->writeStringValue('secretName', $this->getSecretName());
        $writer->writeStringValue('serviceConnectorResourceId', $this->getServiceConnectorResourceId());
    }

    /**
     * Sets the keyVaultIntentConfiguration property value. The keyVaultIntentConfiguration property
     * @param CloudPcDomainJoinKeyVaultIntentConfiguration|null $value Value to set for the keyVaultIntentConfiguration property.
    */
    public function setKeyVaultIntentConfiguration(?CloudPcDomainJoinKeyVaultIntentConfiguration $value): void {
        $this->getBackingStore()->set('keyVaultIntentConfiguration', $value);
    }

    /**
     * Sets the keyVaultResourceId property value. The full Azure Resource Manager resource ID of the Azure Key Vault that stores the domain join password. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.KeyVault/vaults/{vaultName}. Required.
     * @param string|null $value Value to set for the keyVaultResourceId property.
    */
    public function setKeyVaultResourceId(?string $value): void {
        $this->getBackingStore()->set('keyVaultResourceId', $value);
    }

    /**
     * Sets the secretName property value. The name of the secret in the Azure Key Vault that stores the domain join password. Required.
     * @param string|null $value Value to set for the secretName property.
    */
    public function setSecretName(?string $value): void {
        $this->getBackingStore()->set('secretName', $value);
    }

    /**
     * Sets the serviceConnectorResourceId property value. The full Azure Resource Manager resource ID of the Windows 365 service connector that grants Windows 365 access to the Azure Key Vault. Required format when specified: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Windows365/serviceConnectors/{serviceConnectorName}. Optional.
     * @param string|null $value Value to set for the serviceConnectorResourceId property.
    */
    public function setServiceConnectorResourceId(?string $value): void {
        $this->getBackingStore()->set('serviceConnectorResourceId', $value);
    }

}
