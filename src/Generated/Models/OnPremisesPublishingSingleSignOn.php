<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesPublishingSingleSignOn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesPublishingSingleSignOn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesPublishingSingleSignOn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesPublishingSingleSignOn {
        return new OnPremisesPublishingSingleSignOn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'kerberosSignOnSettings' => fn(ParseNode $n) => $o->setKerberosSignOnSettings($n->getObjectValue([KerberosSignOnSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'singleSignOnMode' => fn(ParseNode $n) => $o->setSingleSignOnMode($n->getEnumValue(SingleSignOnMode::class)),
        ];
    }

    /**
     * Gets the kerberosSignOnSettings property value. The Kerberos Constrained Delegation settings for applications that use Integrated Window Authentication.
     * @return KerberosSignOnSettings|null
    */
    public function getKerberosSignOnSettings(): ?KerberosSignOnSettings {
        $val = $this->getBackingStore()->get('kerberosSignOnSettings');
        if (is_null($val) || $val instanceof KerberosSignOnSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kerberosSignOnSettings'");
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
     * Gets the singleSignOnMode property value. The preferred single-sign on mode for the application. Possible values are: none, onPremisesKerberos, aadHeaderBased,pingHeaderBased, oAuthToken.
     * @return SingleSignOnMode|null
    */
    public function getSingleSignOnMode(): ?SingleSignOnMode {
        $val = $this->getBackingStore()->get('singleSignOnMode');
        if (is_null($val) || $val instanceof SingleSignOnMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleSignOnMode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('kerberosSignOnSettings', $this->getKerberosSignOnSettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('singleSignOnMode', $this->getSingleSignOnMode());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the kerberosSignOnSettings property value. The Kerberos Constrained Delegation settings for applications that use Integrated Window Authentication.
     * @param KerberosSignOnSettings|null $value Value to set for the kerberosSignOnSettings property.
    */
    public function setKerberosSignOnSettings(?KerberosSignOnSettings $value): void {
        $this->getBackingStore()->set('kerberosSignOnSettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the singleSignOnMode property value. The preferred single-sign on mode for the application. Possible values are: none, onPremisesKerberos, aadHeaderBased,pingHeaderBased, oAuthToken.
     * @param SingleSignOnMode|null $value Value to set for the singleSignOnMode property.
    */
    public function setSingleSignOnMode(?SingleSignOnMode $value): void {
        $this->getBackingStore()->set('singleSignOnMode', $value);
    }

}
