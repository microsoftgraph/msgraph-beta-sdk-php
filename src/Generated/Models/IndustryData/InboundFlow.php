<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InboundFlow extends IndustryDataActivity implements Parsable 
{
    /**
     * Instantiates a new InboundFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.inboundFlow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InboundFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InboundFlow {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.inboundApiFlow': return new InboundApiFlow();
                case '#microsoft.graph.industryData.inboundFileFlow': return new InboundFileFlow();
            }
        }
        return new InboundFlow();
    }

    /**
     * Gets the dataConnector property value. The dataConnector property
     * @return IndustryDataConnector|null
    */
    public function getDataConnector(): ?IndustryDataConnector {
        $val = $this->getBackingStore()->get('dataConnector');
        if (is_null($val) || $val instanceof IndustryDataConnector) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataConnector'");
    }

    /**
     * Gets the dataDomain property value. The dataDomain property
     * @return InboundDomain|null
    */
    public function getDataDomain(): ?InboundDomain {
        $val = $this->getBackingStore()->get('dataDomain');
        if (is_null($val) || $val instanceof InboundDomain) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataDomain'");
    }

    /**
     * Gets the effectiveDateTime property value. The start of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEffectiveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('effectiveDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveDateTime'");
    }

    /**
     * Gets the expirationDateTime property value. The end of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataConnector' => fn(ParseNode $n) => $o->setDataConnector($n->getObjectValue([IndustryDataConnector::class, 'createFromDiscriminatorValue'])),
            'dataDomain' => fn(ParseNode $n) => $o->setDataDomain($n->getEnumValue(InboundDomain::class)),
            'effectiveDateTime' => fn(ParseNode $n) => $o->setEffectiveDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'year' => fn(ParseNode $n) => $o->setYear($n->getObjectValue([YearTimePeriodDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the year property value. The year property
     * @return YearTimePeriodDefinition|null
    */
    public function getYear(): ?YearTimePeriodDefinition {
        $val = $this->getBackingStore()->get('year');
        if (is_null($val) || $val instanceof YearTimePeriodDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'year'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataConnector', $this->getDataConnector());
        $writer->writeEnumValue('dataDomain', $this->getDataDomain());
        $writer->writeDateTimeValue('effectiveDateTime', $this->getEffectiveDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeObjectValue('year', $this->getYear());
    }

    /**
     * Sets the dataConnector property value. The dataConnector property
     * @param IndustryDataConnector|null $value Value to set for the dataConnector property.
    */
    public function setDataConnector(?IndustryDataConnector $value): void {
        $this->getBackingStore()->set('dataConnector', $value);
    }

    /**
     * Sets the dataDomain property value. The dataDomain property
     * @param InboundDomain|null $value Value to set for the dataDomain property.
    */
    public function setDataDomain(?InboundDomain $value): void {
        $this->getBackingStore()->set('dataDomain', $value);
    }

    /**
     * Sets the effectiveDateTime property value. The start of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the effectiveDateTime property.
    */
    public function setEffectiveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('effectiveDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The end of the time window when the flow is allowed to run. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the year property value. The year property
     * @param YearTimePeriodDefinition|null $value Value to set for the year property.
    */
    public function setYear(?YearTimePeriodDefinition $value): void {
        $this->getBackingStore()->set('year', $value);
    }

}
