<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserLastSignInRecommendationInsightSetting extends AccessReviewRecommendationInsightSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $recommendationLookBackDuration Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days.
    */
    private ?DateInterval $recommendationLookBackDuration = null;
    
    /**
     * @var UserSignInRecommendationScope|null $signInScope Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
    */
    private ?UserSignInRecommendationScope $signInScope = null;
    
    /**
     * Instantiates a new UserLastSignInRecommendationInsightSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserLastSignInRecommendationInsightSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserLastSignInRecommendationInsightSetting {
        return new UserLastSignInRecommendationInsightSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recommendationLookBackDuration' => function (ParseNode $n) use ($o) { $o->setRecommendationLookBackDuration($n->getDateIntervalValue()); },
            'signInScope' => function (ParseNode $n) use ($o) { $o->setSignInScope($n->getEnumValue(UserSignInRecommendationScope::class)); },
        ]);
    }

    /**
     * Gets the recommendationLookBackDuration property value. Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days.
     * @return DateInterval|null
    */
    public function getRecommendationLookBackDuration(): ?DateInterval {
        return $this->recommendationLookBackDuration;
    }

    /**
     * Gets the signInScope property value. Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
     * @return UserSignInRecommendationScope|null
    */
    public function getSignInScope(): ?UserSignInRecommendationScope {
        return $this->signInScope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('recommendationLookBackDuration', $this->recommendationLookBackDuration);
        $writer->writeEnumValue('signInScope', $this->signInScope);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the recommendationLookBackDuration property value. Optional. Indicates the time period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Azure AD roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days.
     *  @param DateInterval|null $value Value to set for the recommendationLookBackDuration property.
    */
    public function setRecommendationLookBackDuration(?DateInterval $value ): void {
        $this->recommendationLookBackDuration = $value;
    }

    /**
     * Sets the signInScope property value. Indicates whether inactivity is calculated based on the user's inactivity in the tenant or in the application. The possible values are tenant, application, unknownFutureValue. application is only relevant when the access review is a review of an assignment to an application.
     *  @param UserSignInRecommendationScope|null $value Value to set for the signInScope property.
    */
    public function setSignInScope(?UserSignInRecommendationScope $value ): void {
        $this->signInScope = $value;
    }

}
