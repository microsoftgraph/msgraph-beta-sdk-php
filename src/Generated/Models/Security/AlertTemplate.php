<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AlertTemplate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AlertTemplate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertTemplate {
        return new AlertTemplate();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the category property value. Category assigned to the alert triggered by the custom detection rule.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. Description of the alert triggered by the custom detection rule.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'impactedAssets' => fn(ParseNode $n) => $o->setImpactedAssets($n->getCollectionOfObjectValues([ImpactedAsset::class, 'createFromDiscriminatorValue'])),
            'mitreTechniques' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMitreTechniques($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommendedActions' => fn(ParseNode $n) => $o->setRecommendedActions($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the impactedAssets property value. Which asset or assets were impacted based on the alert triggered by the custom detection rule.
     * @return array<ImpactedAsset>|null
    */
    public function getImpactedAssets(): ?array {
        $val = $this->getBackingStore()->get('impactedAssets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImpactedAsset::class);
            /** @var array<ImpactedAsset>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedAssets'");
    }

    /**
     * Gets the mitreTechniques property value. MITRE technique assigned to the alert triggered by the custom detection rule.
     * @return array<string>|null
    */
    public function getMitreTechniques(): ?array {
        $val = $this->getBackingStore()->get('mitreTechniques');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mitreTechniques'");
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
     * Gets the recommendedActions property value. Recommended actions to mitigate the threat related to the alert triggered by the custom detection rule.
     * @return string|null
    */
    public function getRecommendedActions(): ?string {
        $val = $this->getBackingStore()->get('recommendedActions');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedActions'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof AlertSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the title property value. Name of the alert triggered by the custom detection rule.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('impactedAssets', $this->getImpactedAssets());
        $writer->writeCollectionOfPrimitiveValues('mitreTechniques', $this->getMitreTechniques());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('recommendedActions', $this->getRecommendedActions());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the category property value. Category assigned to the alert triggered by the custom detection rule.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. Description of the alert triggered by the custom detection rule.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the impactedAssets property value. Which asset or assets were impacted based on the alert triggered by the custom detection rule.
     * @param array<ImpactedAsset>|null $value Value to set for the impactedAssets property.
    */
    public function setImpactedAssets(?array $value): void {
        $this->getBackingStore()->set('impactedAssets', $value);
    }

    /**
     * Sets the mitreTechniques property value. MITRE technique assigned to the alert triggered by the custom detection rule.
     * @param array<string>|null $value Value to set for the mitreTechniques property.
    */
    public function setMitreTechniques(?array $value): void {
        $this->getBackingStore()->set('mitreTechniques', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommendedActions property value. Recommended actions to mitigate the threat related to the alert triggered by the custom detection rule.
     * @param string|null $value Value to set for the recommendedActions property.
    */
    public function setRecommendedActions(?string $value): void {
        $this->getBackingStore()->set('recommendedActions', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the title property value. Name of the alert triggered by the custom detection rule.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
