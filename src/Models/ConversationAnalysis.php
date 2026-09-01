<?php

declare(strict_types=1);

namespace Liberu\CRM\ConversationAnalytics\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $analyst_id @property string $conversation_key @property array<string,mixed>|null $scorecard */
final class ConversationAnalysis extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_conversation_analytics';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['topics' => 'array', 'objections' => 'array', 'competitors' => 'array', 'questions' => 'array', 'outcomes' => 'array', 'talk_ratios' => 'array', 'coaching_moments' => 'array', 'scorecard' => 'array', 'observed_on' => 'date'];
    }
}
