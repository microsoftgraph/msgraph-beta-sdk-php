<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Payload extends Entity implements Parsable 
{
    /**
     * Instantiates a new payload and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payload {
        return new Payload();
    }

    /**
     * Gets the brand property value. The brand property
     * @return PayloadBrand|null
    */
    public function getBrand(): ?PayloadBrand {
        return $this->getBackingStore()->get('brand');
    }

    /**
     * Gets the complexity property value. The complexity property
     * @return PayloadComplexity|null
    */
    public function getComplexity(): ?PayloadComplexity {
        return $this->getBackingStore()->get('complexity');
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the detail property value. The detail property
     * @return PayloadDetail|null
    */
    public function getDetail(): ?PayloadDetail {
        return $this->getBackingStore()->get('detail');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getEnumValue(PayloadBrand::class)),
            'complexity' => fn(ParseNode $n) => $o->setComplexity($n->getEnumValue(PayloadComplexity::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getObjectValue([PayloadDetail::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getEnumValue(PayloadIndustry::class)),
            'isAutomated' => fn(ParseNode $n) => $o->setIsAutomated($n->getBooleanValue()),
            'isControversial' => fn(ParseNode $n) => $o->setIsControversial($n->getBooleanValue()),
            'isCurrentEvent' => fn(ParseNode $n) => $o->setIsCurrentEvent($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payloadTags' => fn(ParseNode $n) => $o->setPayloadTags($n->getCollectionOfPrimitiveValues()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(PayloadDeliveryPlatform::class)),
            'predictedCompromiseRate' => fn(ParseNode $n) => $o->setPredictedCompromiseRate($n->getFloatValue()),
            'simulationAttackType' => fn(ParseNode $n) => $o->setSimulationAttackType($n->getEnumValue(SimulationAttackType::class)),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(SimulationContentSource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationContentStatus::class)),
            'technique' => fn(ParseNode $n) => $o->setTechnique($n->getEnumValue(SimulationAttackTechnique::class)),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getEnumValue(PayloadTheme::class)),
        ]);
    }

    /**
     * Gets the industry property value. The industry property
     * @return PayloadIndustry|null
    */
    public function getIndustry(): ?PayloadIndustry {
        return $this->getBackingStore()->get('industry');
    }

    /**
     * Gets the isAutomated property value. The isAutomated property
     * @return bool|null
    */
    public function getIsAutomated(): ?bool {
        return $this->getBackingStore()->get('isAutomated');
    }

    /**
     * Gets the isControversial property value. The isControversial property
     * @return bool|null
    */
    public function getIsControversial(): ?bool {
        return $this->getBackingStore()->get('isControversial');
    }

    /**
     * Gets the isCurrentEvent property value. The isCurrentEvent property
     * @return bool|null
    */
    public function getIsCurrentEvent(): ?bool {
        return $this->getBackingStore()->get('isCurrentEvent');
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->getBackingStore()->get('language');
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the payloadTags property value. The payloadTags property
     * @return array<string>|null
    */
    public function getPayloadTags(): ?array {
        return $this->getBackingStore()->get('payloadTags');
    }

    /**
     * Gets the platform property value. The platform property
     * @return PayloadDeliveryPlatform|null
    */
    public function getPlatform(): ?PayloadDeliveryPlatform {
        return $this->getBackingStore()->get('platform');
    }

    /**
     * Gets the predictedCompromiseRate property value. The predictedCompromiseRate property
     * @return float|null
    */
    public function getPredictedCompromiseRate(): ?float {
        return $this->getBackingStore()->get('predictedCompromiseRate');
    }

    /**
     * Gets the simulationAttackType property value. The simulationAttackType property
     * @return SimulationAttackType|null
    */
    public function getSimulationAttackType(): ?SimulationAttackType {
        return $this->getBackingStore()->get('simulationAttackType');
    }

    /**
     * Gets the source property value. The source property
     * @return SimulationContentSource|null
    */
    public function getSource(): ?SimulationContentSource {
        return $this->getBackingStore()->get('source');
    }

    /**
     * Gets the status property value. The status property
     * @return SimulationContentStatus|null
    */
    public function getStatus(): ?SimulationContentStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the technique property value. The technique property
     * @return SimulationAttackTechnique|null
    */
    public function getTechnique(): ?SimulationAttackTechnique {
        return $this->getBackingStore()->get('technique');
    }

    /**
     * Gets the theme property value. The theme property
     * @return PayloadTheme|null
    */
    public function getTheme(): ?PayloadTheme {
        return $this->getBackingStore()->get('theme');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('brand', $this->getBrand());
        $writer->writeEnumValue('complexity', $this->getComplexity());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('detail', $this->getDetail());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('industry', $this->getIndustry());
        $writer->writeBooleanValue('isAutomated', $this->getIsAutomated());
        $writer->writeBooleanValue('isControversial', $this->getIsControversial());
        $writer->writeBooleanValue('isCurrentEvent', $this->getIsCurrentEvent());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('payloadTags', $this->getPayloadTags());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeFloatValue('predictedCompromiseRate', $this->getPredictedCompromiseRate());
        $writer->writeEnumValue('simulationAttackType', $this->getSimulationAttackType());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('technique', $this->getTechnique());
        $writer->writeEnumValue('theme', $this->getTheme());
    }

    /**
     * Sets the brand property value. The brand property
     *  @param PayloadBrand|null $value Value to set for the brand property.
    */
    public function setBrand(?PayloadBrand $value): void {
        $this->getBackingStore()->set('brand', $value);
    }

    /**
     * Sets the complexity property value. The complexity property
     *  @param PayloadComplexity|null $value Value to set for the complexity property.
    */
    public function setComplexity(?PayloadComplexity $value): void {
        $this->getBackingStore()->set('complexity', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detail property value. The detail property
     *  @param PayloadDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?PayloadDetail $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the industry property value. The industry property
     *  @param PayloadIndustry|null $value Value to set for the industry property.
    */
    public function setIndustry(?PayloadIndustry $value): void {
        $this->getBackingStore()->set('industry', $value);
    }

    /**
     * Sets the isAutomated property value. The isAutomated property
     *  @param bool|null $value Value to set for the isAutomated property.
    */
    public function setIsAutomated(?bool $value): void {
        $this->getBackingStore()->set('isAutomated', $value);
    }

    /**
     * Sets the isControversial property value. The isControversial property
     *  @param bool|null $value Value to set for the isControversial property.
    */
    public function setIsControversial(?bool $value): void {
        $this->getBackingStore()->set('isControversial', $value);
    }

    /**
     * Sets the isCurrentEvent property value. The isCurrentEvent property
     *  @param bool|null $value Value to set for the isCurrentEvent property.
    */
    public function setIsCurrentEvent(?bool $value): void {
        $this->getBackingStore()->set('isCurrentEvent', $value);
    }

    /**
     * Sets the language property value. The language property
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payloadTags property value. The payloadTags property
     *  @param array<string>|null $value Value to set for the payloadTags property.
    */
    public function setPayloadTags(?array $value): void {
        $this->getBackingStore()->set('payloadTags', $value);
    }

    /**
     * Sets the platform property value. The platform property
     *  @param PayloadDeliveryPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?PayloadDeliveryPlatform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the predictedCompromiseRate property value. The predictedCompromiseRate property
     *  @param float|null $value Value to set for the predictedCompromiseRate property.
    */
    public function setPredictedCompromiseRate(?float $value): void {
        $this->getBackingStore()->set('predictedCompromiseRate', $value);
    }

    /**
     * Sets the simulationAttackType property value. The simulationAttackType property
     *  @param SimulationAttackType|null $value Value to set for the simulationAttackType property.
    */
    public function setSimulationAttackType(?SimulationAttackType $value): void {
        $this->getBackingStore()->set('simulationAttackType', $value);
    }

    /**
     * Sets the source property value. The source property
     *  @param SimulationContentSource|null $value Value to set for the source property.
    */
    public function setSource(?SimulationContentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param SimulationContentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationContentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the technique property value. The technique property
     *  @param SimulationAttackTechnique|null $value Value to set for the technique property.
    */
    public function setTechnique(?SimulationAttackTechnique $value): void {
        $this->getBackingStore()->set('technique', $value);
    }

    /**
     * Sets the theme property value. The theme property
     *  @param PayloadTheme|null $value Value to set for the theme property.
    */
    public function setTheme(?PayloadTheme $value): void {
        $this->getBackingStore()->set('theme', $value);
    }

}
